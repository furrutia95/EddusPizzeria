<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'orders_products';
    protected $fillable = ['prod_id', 'order_id', 'size', 'half', 'quantity', 'price'];
    public $timestamps = false;
}
