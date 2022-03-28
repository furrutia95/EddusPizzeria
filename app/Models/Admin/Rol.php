<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rols';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
