<?php

namespace App\Http\Controllers\Admin\Productos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Productos\Ingredient;
use App\Http\Requests\ValidacionIngrediente;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredient::orderBy('id','ASC')->get();
        return view('admin.ingredients.index')->with('ingredients',$ingredients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ingredients.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionIngrediente $request)
    {

       Ingredient::create($request->all());
       return redirect('admin/ingrediente')->with('mensaje','Ingrediente creado con exito');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $ingredients = \DB::table('ingredients')->where('name','like','%'.$search.'%')->paginate(5);
        return view('admin.ingredients.index',['ingredients'=>$ingredients]);
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
        $ingredient = \DB::table('ingredients')->where('id','like','%'.$id.'%')->paginate(5);
        return view('admin.ingredients.modificar')->with('id',$id)->with('ingredient',$ingredient);
    }

    public function update(Request $request, $id)
    {
        $input = array_values($request->input());
        $l = count($input);
        //Array 1:Nombre 2:Stock
        if ($l < 3 ) {
            \DB::table('ingredients')
                ->where('id',$id)
                ->update(['name' => $input[1],'stock'=>0]);
        }
        else
        {
            \DB::table('ingredients')
                ->where('id',$id)
                ->update(['name' => $input[1],'stock'=>1]);
        }
        return redirect('admin/ingrediente')->with('mensaje','Ingrediente actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::table('products_ingredients')->where('ingred_id', '=', $id)->delete();
        \DB::table('ingredients')->where('id', '=', $id)->delete();
        return redirect('admin/ingrediente')->with('mensaje','Ingrediente eliminado con exito');
    }
}
