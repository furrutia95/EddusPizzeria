@extends("theme.$theme.layout")

@section('titulo')
	Ingredientes
@endsection
@section('contenido')

	<div class="row">
	        <div class="col-lg-12">
	        	@include('includes.form-error')
	        	@include('includes.mensaje')
	        	<div class="box box-danger">
	            	<div class="box-header with-border">
	              	<h3 class="box-title">Modificar Ingredientes Producto</h3>
	            	</div>
	            	<button type=""><i class="fa fa-fw fa-arrow-circle-o-left"></i><a href="{{url('admin/producto')}}">Volver Atrás</a></button>
	            	<form action="{{route('actualizar_pizza',['id'=>$id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
	              		@csrf
		              	<div class="box-body">
		              		<label for="ingredients" class="col-lg-3 control-label">Ingredientes</label><br><br>
		              		<div class="form-group">
		              			@foreach($ing_in as $ing_in)
									<label for="" class="col-lg-3 control-label">{{$ing_in->name}}</label>
									<label><input type="checkbox" name="{{$ing_in->id}}" id="{{$ing_in->id}}" class="form-check-input" value="{{$ing_in->id}}" checked></label><br>
		            			@endforeach
								@foreach($ing_not as $ing_not)
									<label for="" class="col-lg-3 control-label">{{$ing_not->name}}</label>
									<label><input type="checkbox" name="{{$ing_not->id}}" id="{{$ing_not->id}}" class="form-check-input" value="{{$ing_not->id}}"></label><br>
		            			@endforeach
							</div>
						</div>
		            	<div class="box-footer">
		              	<div class="col-lg-3"></div>
		              	<div class="col-lg-6">
		              	@include('includes.boton-form-editar')	
		              	</div>
		              </div>
	          		</form>
	            </dir>
	        </div>
        </div>
    </div> 
@endsection