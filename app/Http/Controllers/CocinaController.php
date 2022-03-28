<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CocinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        can('listar-cocina');
        $orders = Order::orderBy('id','ASC')->where('state','=',1)->get();
        return view('cocina.index')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        can('listar-cocina');
        $search = $request->get('search');
        $orders = \DB::table('orders')->where('id','like','%'.$search.'%')->where('state','=',1)->get();
        return view('cocina.index',['orders'=>$orders]);
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
        can('detallar-cocina');
        return view('cocina.detallar')->with('id',$id)->with('detalle',$detalle)->with('pedido',$pedido);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
