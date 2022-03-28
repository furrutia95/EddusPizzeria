@extends("theme.$theme.layout")
@section('titulo')
	Pedidos
@endsection 
@section('contenido')
	<div class="row">
	        <div class="col-lg-12">
	        	@include('includes.form-error')
	        	@include('includes.mensaje')
	        	<div class="box box-danger">
	            <div class="box-header with-border">
	              <h3 class="box-title">Pedidos</h3>
	            </div>
	            <!--Buscador-->
	            	<form class="navbar-form pull-right" action="{{route('buscar_cocina')}}" method="GET" autocomplete="off">
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
		            		<th align="center">Numero</th>
		            		<th align="center">Fecha</th>
		            		<th align="center">Tipo de Pedido</th>
		            		<th align="center">Estado</th>
		            		<th align="center">Comentarios</th>	            		
		            	</thead>
		            	<tbody>
		            		@foreach($orders as $order)
		            			<tr>
		            				<td>{{$order->id}}</td>
		            				<td>{{$order->created_at}}</td>
		            				<td>{{$order->type}}</td>
		            				<td> 
		            					@if($order->state == "1")
		            						Preparando
		            					@else
		            						Entregado
		            					@endif
		            				</td>
		            				<td>{{$order->comentary}}</td>
		            				<td>
		            					<a class="btn btn-small btn-info" href="{{route('detallar_cocina',['id'=>$order->id])}}">Detallar</a>
		            				</td>
		            			</tr>
		            		@endforeach
		            	</tbody>
		            </table>
		            <!--Fin Listado -->
	            </div>
	        </div>
        </div>
    </div> 
@endsection