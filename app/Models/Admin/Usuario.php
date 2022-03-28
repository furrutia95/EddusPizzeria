<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $table = 'users';
    protected $fillable = ['rut', 'name', 'email', 'password'];
    protected $guarded = ['id'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'users_rols');
    }

     public function setSession($roles)
    {
        Session::put([
            'rut' => $this->rut,
            'usuario_id' => $this->id,
            'nombre_usuario' => $this->name
        ]);
        if (count($roles) == 1) {
            Session::put(
                [
                    'rol_id' => $roles[0]['id'],
                    'rol_nombre' => $roles[0]['nombre'],
                ]
            );
        } else {
            Session::put('roles', $roles);
        }
    }
    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = Hash::make($pass);
    }
}
