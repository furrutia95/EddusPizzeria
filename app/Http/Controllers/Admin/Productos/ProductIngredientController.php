<?php

namespace App\Http\Controllers\Admin\Productos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Productos\Product;
use App\Models\Productos\Ingredient;
use App\Models\Productos\ProductIngredient;

class ProductIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.proding.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Obtener valores de array 0.basura 1.id producto 2++.id de ingredientes*/
        $input = array_values($request->input());
        $count = count($input);
        $i = "2";
        /*Insertar par ID producto ID ingrediente en tabla Producto_Ingrediente*/
        while ($i < $count) {
            \DB::table('products_ingredients')->insert(
                ['prod_id' => $input[1],'ingred_id'=>$input[$i]]
            );
            $i++;
        }
        $products = Product::orderBy('id','ASC')->paginate(10);
        return redirect('admin/producto')->with('products',$products);
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
        
        $proding = \DB::table('products_ingredients')->where('prod_id','like','%'.$id.'%')->paginate(10);
        $ingred_sel=array();
        $exc_query=array();
        $on_query=array();
        $i=0;
        foreach ($proding as $prod) {
            $ingred_sel = array_add($ingred_sel,$i,$prod->ingred_id);
            $exc_query = array_add($exc_query,$i,['id','not like','%'.$prod->ingred_id.'%']);
            $i++;
        }
        if ($i == 0) {
            $ing_in = array();
            $ing_not = Ingredient::orderBy('id','ASC')->paginate(10); 
        }
        else
        {
            $ing_in = \DB::table('ingredients')->whereIn('id',$ingred_sel)->paginate(10);
            $ing_not = \DB::table('ingredients')->where($exc_query)->paginate(10);
        }
        return view('admin.proding.modificar')->with('ing_in',$ing_in)->with('ing_not',$ing_not)->with('id',$id);
        
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
        $del_query = array();
        $ing = 1;
        while ($ing < $l) {
            $del_query = array_add($del_query,$ing-1,['ingred_id','not like','%'.$input[$ing].'%']);
            \DB::table('products_ingredients')->updateOrInsert(
                ['prod_id' => $id, 'ingred_id' => $input[$ing]
            ]);
            $ing++;
        }
        \DB::table('products_ingredients')->where('prod_id','=',$id)->where($del_query)->delete();
        return redirect('admin/producto')->with('mensaje','Ingredientes actualizados con exito');
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
