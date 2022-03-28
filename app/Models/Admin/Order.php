<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';
    protected $fillable = ['payment', 'date', 'type', 'discount', 'total', 'state', 'comentary'];
    protected $guarded = ['id'];
}
