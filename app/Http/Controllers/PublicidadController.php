<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocion;
use App\Models\Productos\Product;
use App\Models\Productos\Ingredient;
use App\Models\Productos\ProductIngredient;

class PublicidadController extends Controller
{
     public function index()
    {
 

        return view('publicidad.index');
    }

    public function menu()
    {
 
    	$productos = Product::orderBy('id')->get();
        $ingredientes = Ingredient::get();
        $prodings = ProductIngredient::get();
        return view('publicidad.menu', compact ('productos', 'ingredientes', 'prodings'));
    }

    public function promocion()
    {
 		$datas = Promocion::orderBy('id')->get();
        return view('publicidad.promocion', compact ('datas'));
    }

    public function nosotros()
    {
        return view('publicidad.nosotros');
    }
}
