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
	              	<h3 class="box-title">Modificar Ingrediente</h3>
	            	</div>
	            	<button type=""><i class="fa fa-fw fa-arrow-circle-o-left"></i><a href="{{url('admin/ingrediente')}}">Volver Atrás</a></button>
	            	<form action="{{route('actualizar_ingrediente',['id'=>$id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
	              		@csrf
		              	<div class="box-body">
		              		@foreach($ingredient as $ingredient)
		            			<div class="form-group">
									<label for="" class="col-lg-3 control-label">Nombre</label>
		            				<div class="col-lg-8">
							    		<label><input type="text" name="name" id="name" class="form-control" value ="{{$ingredient->name}}"></label>
									</div>
		            			</div>
		            			<div class="form-group">
									<label for="" class="col-lg-3 control-label">Stock</label>
		            				<div class="col-lg-8">
		            					@if($ingredient->stock == "1")
		            						<label><input type="checkbox" name="stock" id="stock" class="form-check-input" value ="{{$ingredient->stock}}" checked> Disponible?</label>
		            					@else
		            						<label><input type="checkbox" name="stock" id="stock" class="form-check-input" value ="{{$ingredient->stock}}"> Disponible?</label>
		            					@endif
									</div>
		            			</div>
		            		@endforeach	
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