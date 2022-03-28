<?php

namespace App\Models\Productos;

use Illuminate\Database\Eloquent\Model;

class ProductIngredient extends Model
{
    protected $table = 'products_ingredients';
    protected $fillable = ['prod_id', 'ingred_id'];
    public $timestamps = false;
}
