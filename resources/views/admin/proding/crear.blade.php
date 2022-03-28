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
	              	<form action="{{route('guardar_pizza')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
	              		@csrf
		              	<div class="box-body">
		              		<h4 class="col-lg-3">{{$name}}</h4><br>
		              		<input type="hidden" name="id" id="id" value="{{$id}}">
							<div class="form-group">
								<label for="ingredients" class="col-lg-3 control-label">Ingredientes</label>
								<div class="col-lg-8">
									@foreach($ingredients as $ingredient)
										<label for="" class="col-lg-3 control-label">{{$ingredient->name}}</label>
										<label><input type="checkbox" name="{{$ingredient->id}}" id="{{$ingredient->id}}" class="form-check-input" value ="{{$ingredient->id}}"></label><br>
		            				@endforeach
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