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
	              <h3 class="box-title">Ingredientes</h3>
	            </div>
	            <button class="btn btn-default" type=""><a href="{{url('admin/ingrediente/crear')}}">Crear Ingrediente</a></button>
	            <!--Buscador-->
	            
	            	<form class="navbar-form pull-right" action="{{route('buscar_ingrediente')}}" method="GET" autocomplete="off">
	            		<div class="input-group">
	            			<input type="search" name="search" class="form-control">
	            			<span class="input-gropu-prepend">
	            				<button type="submit" class="btn btn-primary">Buscar</button>
	            			</span>
	            		</div>		
	            	</form>
	            </dir>
	            <div class="box-body">
	            	<!-- Listado -->
		            <table class="table table-striped">
		            	<thead>
		            		<th>ID</th>
		            		<th>Nombre</th>
		            		<th>Stock</th>	            		
		            	</thead>
		            	<tbody>
		            		@foreach($ingredients as $ingredient)
		            			<tr>
		            				<td>{{$ingredient->id}}</td>
		            				<td>{{$ingredient->name}}</td>
		            				<td> 
		            					@if($ingredient->stock == "1")
		            						Hay Stock
		            					@else
		            						No Hay Stock
		            					@endif
		            				</td>
		            				<td>
		            					<a class="btn btn-small btn-warning" href="{{route('modificar_ingrediente',['id'=>$ingredient->id])}}">Modificar</a>
		            					<a class="btn btn-small btn-danger" href="{{route('eliminar_ingrediente',['id'=>$ingredient->id])}}">Eliminar</a>
		            				</td>
		            			</tr>
		            		@endforeach
		            		{{ $ingredients->links() }}

		            	</tbody>
		            </table>
		            <!--Fin Listado -->
	            </div>
	        </div>
        </div>
    </div> 
@endsection