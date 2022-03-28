<div class="form-group">
    <label for="titulo" class="col-lg-3 control-label requerido">Título</label>
    <div class="col-lg-8">
    <input type="text" name="titulo" id="titulo" class="form-control" value="{{old('titulo', $data->titulo ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="descripcion" class="col-lg-3 control-label requerido">Descripción</label>
    <div class="col-lg-8">
    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion', $data->descripcion ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="foto" class="col-lg-3 control-label">Foto</label>
    <div class="col-lg-5">
        <input type="file" name="foto_up" id="foto" data-initial-preview="{{isset($data->foto) ? Storage::url("imagenes/promociones/$data->foto") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Promocion+Pizza"}}" accept="image/*"/>
    </div>
</div>