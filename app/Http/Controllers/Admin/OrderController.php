<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use App\Models\Admin\OrderProduct;
use App\Models\Productos\Product;
use Barryvdh\DomPDF\Facade as PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id','ASC')->get();
        return view('admin.order.index')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::where('available','like','1')->orderBy('id','ASC')->paginate(20);
        return view('admin.order.crear')->with('products',$products);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->paymeth = $request->get("paymeth");
        $order->date = $request->get("date");
        $order->type = $request->get("type");
        $order->discount = $request->get("discount");
        $order->total = $request->get("total_venta");
        $order->comentary= $request->get("comentary");
        $order->state=1;
        $order->save();
        $idorder= $order->id;
        $rqst = $request->all("idprod");
        $idprod = $rqst['idprod'];
        $l = count($idprod);
        $rqst = $request->all("tamaño");
        $tamaño = $rqst['tamaño'];
        $rqst = $request->all("mitad");
        $mitad = $rqst['mitad'];
        $rqst = $request->all("cantidad");
        $cantidad = $rqst['cantidad'];
        $rqst = $request->all("precio");
        $precio = $rqst['precio'];
        for ($i=0; $i < $l ; $i++) { 
            $op = new OrderProduct();
            $op->prod_id = $idprod[$i];
            $op->order_id = $idorder;
            $op->size = $tamaño[$i];
            $op->half = $mitad[$i];
            $op->quantity = $cantidad[$i];
            $op->price = $precio[$i];
            $op->save();
        }
        return redirect('admin/pedido')->with('mensaje','Pedido creado con exito');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->get('search');
        $orders = \DB::table('orders')->where('id','like','%'.$search.'%')->paginate(20);
        return view('admin.order.index',['orders'=>$orders]);
    }
    public function show($id)
    {
        $pedido =\DB::table('orders as o')
                ->select('o.paymeth','o.date','o.type','o.discount','o.total','o.state','o.comentary')
                ->where('id','like','%'.$id.'%')
                ->get();
        $detalle=\DB::table('orders_products as op')
                ->join('products as p','op.prod_id','=','p.id')
                ->select('p.name as product','op.quantity','op.size','op.half','op.price')
                ->where('op.order_id','=',$id)
                ->get();
        return view('admin.order.detallar')->with('id',$id)->with('detalle',$detalle)->with('pedido',$pedido);
    }
    public function end($id)
    {
        \DB::table('orders')
                ->where('id',$id)
                ->update(['state' => 0,]);
        return redirect('admin/pedido')->with('mensaje','Pedido finalizado con exito');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function listadoReporte()
    {
        $orders = Order::get()->where('state','=',0);
        return view('admin.report.index')->with('orders',$orders)->with('inicio',1)->with('fin',1);
    }
    public function busquedaReporte(Request $request)
    {
        $inicio = $request->get("inicio");
        $fin = $request->get("fin");
        $orders = Order::where('state','=',0)->whereBetween('date', [$inicio, $fin])->get();
        return view('admin.report.index')->with('orders',$orders)->with('inicio',$inicio)->with('fin',$fin);
    }
    public function generarReporte(Request $request)
    {
        $inicio = $request->get("inicio");
        $fin = $request->get("fin");
        $orders = Order::where('state','=',0)->whereBetween('date', [$inicio, $fin])->get();
        $total = Order::where('state','=',0)->whereBetween('date', [$inicio, $fin])->sum('total');
        $pdf = PDF::loadView('admin.report.reporte', compact('orders','inicio','fin','total'));
        return $pdf->download('reporte-edupizzeria.pdf');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::table('orders_products')->where('order_id', '=', $id)->delete();
        \DB::table('orders')->where('id', '=', $id)->delete();
        return redirect('admin/pedido')->with('mensaje','Pedido eliminado con exito');
    }
}
