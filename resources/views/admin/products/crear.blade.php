@extends("theme.$theme.layout")

@section('titulo')
	Crear Producto
@endsection
@section('contenido')
	<div class="row">
	        <div class="col-lg-12">
	        	@include('includes.form-error')
	        	@include('includes.mensaje')
	        	<div class="box box-danger">
	            <div class="box-header with-border">
	              <h3 class="box-title">Crear Producto</h3>
	            </div>
	            <button type=""><i class="fa fa-fw fa-arrow-circle-o-left"></i><a href="{{url('admin/producto')}}">Volver Atrás</a></button>
	            <form action="{{route('guardar_producto')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off" enctype="multipart/form-data">
	              	@csrf
		            <div class="box-body">
		              	@include('product.form')
						<div class="form-group">
      						<label for="priceS" class="col-lg-3 control-label requerido">Precio P. Pequeña</label>
							<div class="col-lg-8">
							    <input type="number" name="priceS" id="priceS" class="form-control" value ="{{old('priceS')}}" required>
							</div>
						</div>
						<div class="form-group">
      						<label for="priceM" class="col-lg-3 control-label requerido">Precio P. Mediana</label>
							<div class="col-lg-8">
							    <input type="number" name="priceM" id="priceM" class="form-control" value ="{{old('priceM')}}" required>
							</div>
						</div>
						<div class="form-group">
      						<label for="priceL" class="col-lg-3 control-label requerido">Precio P. Familiar</label>
							<div class="col-lg-8">
							    <input type="number" name="priceL" id="priceL" class="form-control" value ="{{old('priceL')}}" required>
							</div>
						</div>
						<div class="form-group">
      						<label for="category" class="col-lg-3 control-label requerido">Categoria</label>
							<div class="col-lg-8">
							    <select name="category" id="category" class="form-control">
										<option value="chef">Recomendaciones del Chef</option>
										<option value="mar">Las del Mar</option>
										<option value="vegeta">Las Vegetarianas</option>
										<option value="aclamadas">Aclamadas por el Cliente</option>
										<option value="tradicional">Nuestras Tradicionales</option>
									</select>
							</div>
						</div>
						<div class="form-group">
		      				<label for="available" class="col-lg-3 control-label">Disponible</label>
							<div class="col-lg-8">
							    <label><input type="checkbox" name="available" id="available" class="form-check-input" value ="1"> Disponible?</label>
								</div>
		             	</div>
		             	<div class="form-group">
		             		<label for="image" class="col-lg-3 control-label requerido">Imagen</label>
		             		<div class="col-lg-8">
							    <input type="file"class="form-control" name="image" accept="image/png, image/jpeg" required>
							</div>
		             	</div>		
					</div>
		              <div class="box-footer">
		              <div class="col-lg-3"></div>
		              <div class="col-lg-6">
		              @include('includes.boton-form-crear')	
		              </div>
		             </div>
	          	</form>
	        </div>
        </div>
    </div>
@endsection