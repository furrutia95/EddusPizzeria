@extends("theme.$theme.layout")

@section('titulo')
	Productos
@endsection
@section('contenido')
	<div class="row">
	        <div class="col-lg-12">
	        	@include('includes.form-error')
	        	@include('includes.mensaje')
	        	<div class="box box-danger">
	            <div class="box-header with-border">
	              <h3 class="box-title">Productos</h3>
	            </div>
	            <button class="btn btn-default" type=""><a href="{{url('admin/producto/crear')}}">Crear Producto</a></button>
	            <!--Buscador-->
	            	<form class="navbar-form pull-right" action="{{route('buscar_producto')}}" method="GET" autocomplete="off">
	            		<div class="input-group">
	            			<input type="search" name="search" class="form-control">
	            			<span class="input-gropu-prepend">
	            				<button type="submit" class="btn btn-primary">Buscar</button>
	            			</span>
	            		</div>		
	            	</form>
	            </dir>
	            <!--Fin Buscador-->
	            <div class="box-body">
	            	<!-- Listado -->
		            <table class="table table-striped">
		            	<thead>
		            		<th align="center">Imagen</th>
		            		<th align="center">Nombre</th>
		            		<th align="center">Disponibilidad</th>
		            		<th align="center">Categoría</th>
		            		<th align="center">Precio Pequeña</th>
		            		<th align="center">Precio Mediana</th>
		            		<th align="center">Precio Familiar</th>	            		
		            	</thead>
		            	<tbody>
		            		@foreach($products as $product)
		            			<tr>
		            				<td align="center"><img src="../imagenes/{{$product->image}}" style="width:150px;height:100px;"></td>
		            				<td>{{$product->name}}</td>
		            				<td> 
		            					@if($product->available == "1")
		            						Disponible
		            					@else
		            						No Disponible
		            					@endif
		            				</td>
		            				<td>{{$product->category}}</td>
		            				<td>{{$product->priceS}}</td>
		            				<td>{{$product->priceM}}</td>
		            				<td>{{$product->priceL}}</td>
		            				<td>
		            					<a class="btn btn-small btn-warning" href="{{route('modificar_producto',['id'=>$product->id])}}">Modificar</a>
		            					<a class="btn btn-small btn-danger" href="{{route('eliminar_producto',['id'=>$product->id])}}">Eliminar</a>
		            				</td>
		            			</tr>
		            		@endforeach

		            		{{ $products->links() }}
		            	</tbody>
		            </table>
		            <!--Fin Listado -->
	            </div>
	        </div>
        </div>
    </div> 
@endsection