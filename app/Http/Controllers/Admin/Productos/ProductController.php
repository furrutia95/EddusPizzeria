<?php
 
namespace App\Http\Controllers\Admin\Productos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Productos\Product;
use App\Models\Productos\Ingredient;
use App\Models\Productos\ProductIngredient;
use App\Http\Requests\ValidacionProducto;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id','ASC')->get();
        return view('admin.products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionProducto $request)
    {
        $image = $request->file('image');
        $n_img = $image->getClientOriginalName();
        $image->move('imagenes',$n_img);
        $input = array_values($request->input());
        $l = count($input);
        $prod = new Product();
        $prod->name = $input[1];
        $prod->image = $n_img;
        $prod->priceS = $input[2];
        $prod->priceM = $input[3];
        $prod->priceL = $input[4];
        $prod->category = $input[5];
        if ($l < 7 ) {
            $prod->available = 0;
        }
        else
        {
            $prod->available = 1;
        }
        $prod->save();    
        $search = $request->get('name');
        $id= \DB::table('products')->where('name','like','%'.$search.'%')->value('id');
        $ingredients = Ingredient::orderBy('id','ASC')->paginate(10);
        return view('admin.proding.crear')->with('id',$id)->with('ingredients',$ingredients)->with('name',$search);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $products = \DB::table('products')->where('name','like','%'.$search.'%')->paginate(20);
        return view('admin.products.index',['products'=>$products]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = \DB::table('products')->where('id','like','%'.$id.'%')->paginate(5);
        return view('admin.products.modificar')->with('product',$product)->with('id',$id);
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
        $input = array_values($request->input());
        $l = count($input);
        $image = $request->file('image');
        $n_img = $image->getClientOriginalName();
        $image->move('imagenes',$n_img);    
        //Array 1:Nombre 2:Descripción 7:Disponibilidad
        if ($l < 7 ) {
            \DB::table('products')
                ->where('id',$id)
                ->update(['name' => $input[1],'priceS'=>$input[2],'priceM'=>$input[3],'priceL'=>$input[4],'category'=>$input[5],'available'=>0,'image' => $n_img]);
        }
        else
        {   
            \DB::table('products')
                ->where('id',$id)
                ->update(['name' => $input[1],'priceS'=>$input[2],'priceM'=>$input[3],'priceL'=>$input[4],'category'=>$input[5],'available'=>1,'image' => $n_img]);
        }
        return redirect('admin/producto')->with('mensaje','Producto actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::table('products_ingredients')->where('prod_id', '=', $id)->delete();
        \DB::table('products')->where('id', '=', $id)->delete();
        return redirect('admin/producto')->with('mensaje','Producto eliminado con exito');
    }
}
