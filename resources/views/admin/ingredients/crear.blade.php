@extends("theme.$theme.layout")

@section('titulo')
	Crear Ingrediente
@endsection
@section('contenido')
	<div class="row">
	        <div class="col-lg-12">
	        	@include('includes.form-error')
	        	@include('includes.mensaje')
	        	<div class="box box-danger">
	            <div class="box-header with-border">
	              <h3 class="box-title">Crear Ingrediente</h3>
	            </div>
	            <button type=""><i class="fa fa-fw fa-arrow-circle-o-left"></i><a href="{{url('admin/ingrediente')}}">Volver Atrás</a></button>
	              	<form action="{{route('guardar_ingrediente')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
	              		@csrf
		              	<div class="box-body">
		              		@include('product.form')
		              		<div class="form-group">
		      					<label for="stock" class="col-lg-3 control-label requerido">Stock</label>
							    <div class="col-lg-8">
							    	<label><input type="checkbox" name="stock" id="stock" class="form-check-input" value ="1"> Disponible</label>
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