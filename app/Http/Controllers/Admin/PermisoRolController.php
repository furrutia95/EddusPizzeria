<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Permission;
use App\Models\Admin\Rol;

class PermisoRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        $permisos = Permission::get();
        $permisosRols = Permission::with('roles')->get()->pluck('roles', 'id')->toArray();
        return view('admin.permiso-rol.index', compact('rols', 'permisos', 'permisosRols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function guardar(Request $request)
    {
         if ($request->ajax()) {
            $permisos = new Permission();
            if ($request->input('estado') == 1) {
                $permisos->find($request->input('permiso_id'))->roles()->attach($request->input('rol_id'));
                return response()->json(['respuesta' => 'El rol se asigno correctamente']);
            } else {
                $permisos->find($request->input('permiso_id'))->roles()->detach($request->input('rol_id'));
                return response()->json(['respuesta' => 'El rol se elimino correctamente']);
            }
        } else {
            abort(404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}