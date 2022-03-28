<?php

namespace App\Models\Productos;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';
    protected $fillable = ['name','stock'];
    protected $guarded = ['id'];
}