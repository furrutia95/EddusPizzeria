@extends("theme.$theme.layout")

@section('titulo')
	Modificar Producto
@endsection
@section("scripts")
<script>
	const product = {!! json_encode($product) !!};
	const uwu = product['data'][0]['category'];
	$(document).ready(function(){
		$('#category option[value='+uwu+']').prop("selected", "selected").change();
	});
</script>
@endsection
@section('contenido')

	<div class="row">
	        <div class="col-lg-12">
	        	@include('includes.form-error')
	        	@include('includes.mensaje')
	        	<div class="box box-danger">
	            	<div class="box-header with-border">
	              	<h3 class="box-title">Modificar Producto</h3>
	            	</div>
	            	<button type=""><i class="fa fa-fw fa-arrow-circle-o-left"></i><a href="{{url('admin/producto')}}">Volver Atrás</a></button>
	            	<form action="{{route('actualizar_producto',['id'=>$id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off" enctype="multipart/form-data">
	              		@csrf
		              	<div class="box-body">
		              		@foreach($product as $product)
		            			<div class="form-group">
									<label for="" class="col-lg-3 control-label">Nombre</label>
		            				<div class="col-lg-8">
							    		<label><input type="text" name="name" id="name" class="form-control" value ="{{$product->name}}" required></label>
									</div>
		            			</div>
		            			<div class="form-group">
      								<label for="priceS" class="col-lg-3 control-label">Precio P. Pequeña</label>
									<div class="col-lg-8">
							    		<input type="number" name="priceS" id="priceS" class="form-control" value ="{{$product->priceS}}" required>
									</div>
								</div>
								<div class="form-group">
		      						<label for="priceM" class="col-lg-3 control-label">Precio P. Mediana</label>
									<div class="col-lg-8">
									    <input type="number" name="priceM" id="priceM" class="form-control" value ="{{$product->priceM}}" required>
									</div>
								</div>
								<div class="form-group">
		      						<label for="priceL" class="col-lg-3 control-label">Precio P. Familiar</label>
									<div class="col-lg-8">
									    <input type="number" name="priceL" id="priceL" class="form-control" value ="{{$product->priceL}}" required>
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
									<label for="" class="col-lg-3 control-label">Disponible</label>
		            				<div class="col-lg-8">
		            					@if($product->available == "1")
		            						<label><input type="checkbox" name="available" id="available" class="form-check-input" value ="{{$product->available}}" checked> Disponible?</label>
		            					@else
		            						<label><input type="checkbox" name="available" id="available" class="form-check-input" value ="{{$product->available}}"> Disponible?</label>
		            					@endif
									</div>
		            			</div>
		            			<div class="form-group">
		             				<label for="image" class="col-lg-3 control-label requerido">Imagen</label>
		             				<div class="col-lg-8">
							    		<input type="file"class="form-control" name="image" data-initial-preview="{{isset($producto->image) ? Storage::url("imagenes/$producto->image") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Promocion+Pizza"}}" accept="image/png, image/jpeg" required>
								</div>
		             	</div>
		            		@endforeach	
						</div>
		            	<div class="box-footer">
		              	<div class="col-lg-3"></div>
		              	<div class="col-lg-6">
		              	@include('includes.boton-form-editar')
		              	<a class="btn btn-small btn-warning" href="{{route('modificar_pizza',['id'=>$id])}}">Modificar Ingredientes</a>	
		              	</div>
		              </div>
	          		</form>
	            </dir>
	        </div>
        </div>
    </div> 
@endsection