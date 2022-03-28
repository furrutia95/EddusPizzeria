<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionPromocion;
use Illuminate\Http\Request;
use App\Models\Promocion;
use Illuminate\Support\Facades\Storage;

class PromocionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        can('listar-promocion');
        $datas = Promocion::orderBy('id')->get();
        return view('promocion.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        can('crear-promocion');
        return view('promocion.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionPromocion $request)
    {
         if ($foto = Promocion::setPromocion($request->foto_up))
            $request->request->add(['foto' => $foto]);
        Promocion::create($request->all());
        return redirect()->route('promocion')->with('mensaje', 'La promocion se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ver(Request $request, Promocion $promocion)
    {
         if ($request->ajax()) {
            return view('promocion.ver', compact('promocion'));
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $data = Promocion::findOrFail($id);
        return view('promocion.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionPromocion  $request, $id)
    {
        $promocion = Promocion::findOrFail($id);
        if ($foto = Promocion::setPromocion($request->foto_up, $promocion->foto))
            $request->request->add(['foto' => $foto]);
        $promocion->update($request->all());
        return redirect()->route('promocion')->with('mensaje', 'La promoción se actualizó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request, $id)
    {
        if ($request->ajax()) {
            $promocion = Promocion::findOrFail($id);
            if (Promocion::destroy($id)) {
                Storage::disk('public')->delete("imagenes/promocion/$promocion->foto");
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
