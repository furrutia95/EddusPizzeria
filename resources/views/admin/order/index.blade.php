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
	            <button class="btn btn-default" type=""><a href="{{url('admin/pedido/crear')}}">Nuevo Pedido</a></button>
	            <!--Buscador-->
	            	<form class="navbar-form pull-right" action="{{route('buscar_pedido')}}" method="GET" autocomplete="off">
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
		            		<th align="center">Medio de Pago</th>
		            		<th align="center">Fecha</th>
		            		<th align="center">Tipo de Pedido</th>
		            		<th align="center">Descuento</th>
		            		<th align="center">Total</th>
		            		<th align="center">Estado</th>
		            		<th align="center">Comentarios</th>	            		
		            	</thead>
		            	<tbody>
		            		@foreach($orders as $order)
		            			<tr>
		            				<td>{{$order->id}}</td>
		            				<td>{{$order->paymeth}}</td>
		            				<td>{{$order->date}}</td>
		            				<td>{{$order->type}}</td>
		            				<td> 
		            					@if($order->discount == "1")
		            						Con Descuento
		            					@else
		            						Sin Descuento
		            					@endif
		            				</td>
		            				<td>${{$order->total}}</td>
		            				<td> 
		            					@if($order->state == "1")
		            						Preparando
		            					@else
		            						Entregado
		            					@endif
		            				</td>
		            				<td>{{$order->comentary}}</td>
		            				<td>
		            					<a class="btn btn-small btn-info" href="{{route('detallar_pedido',['id'=>$order->id])}}">Detallar</a>
		            					<a class="btn btn-small btn-danger" href="{{route('eliminar_pedido',['id'=>$order->id])}}">Eliminar</a>
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