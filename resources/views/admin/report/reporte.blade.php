<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<style>
		.table{
			width: 100%;
			border: 1px solid #999999;			
		}
	</style>
</head>
<body>
	<h2 class="text-center">Reporte {{$inicio}} a {{$fin}}</h2>
	<table class="table">
		<thead>
			<tr>
				<th width="10%">N°</th>
				<th width="10%">Medio de Pago</th>
				<th width="15%">Fecha</th>
				<th width="10%">Tipo de Pedido</th>
				<th width="10%">Descuento</th>
				<th width="10%">Total por Venta</th>
		        <th width="10%">Estado</th>
		        <th width="20%">Comentarios</th>	 
			</tr>
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
				</tr>
			@endforeach
		</tbody>
		<tfoot>
			<th>TOTAL Acumulado</th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th>
				<h4>${{$total}}</h4>
			</th>
		</tfoot>
	</table>
</body>
</html>