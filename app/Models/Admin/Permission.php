<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = ['nombre', 'slug'];
    protected $guarded = ['id'];

    
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'permissions_rols', 'permiso_id', 'rol_id');
    }
}
