<?php

namespace App\Models\Productos;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'image', 'description', 'available', 'priceS', 'priceM', 'priceL','category'];
    protected $guarded = ['id'];
}
