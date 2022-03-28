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
	            	<button type=""><i class="fa fa-fw fa-arrow-circle-o-left"></i><a href="{{url('admin/pedido')}}">Volver Atrás</a></button>
	            	<h3 class="box-title">Pedido n° {{$id}}</h3>
	            </div>
	            <!--Fin Buscador-->
	            <div class="box-body">
	            	<a class="btn btn-small btn-warning" href="{{route('finalizar_pedido',['id'=>$id])}}">Finalizar Pedido</a>
	            	<div class="row">
	            		@foreach($pedido as $pedido)
		            			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				              		<div class="form-group">
			      						<label for="paymeth" class="col-lg-3 control-label">Medio de Pago</label>
										<input type="text" class="form-control" value="{{$pedido->paymeth}}" disabled="true">
									</div>
								</div>
								<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
									<div class="form-group">
			      						<label for="date" class="col-lg-3 control-label">Fecha</label>
						                <input type="date" class="form-control" disabled="true" value="{{$pedido->date}}">
									</div>
								</div>
								<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
				              		<div class="form-group">
			      						<label for="type" class="col-lg-3 control-label">Tipo de Pedido</label>
										<input type="text" class="form-control" value="{{$pedido->type}}" disabled="true">
									</div>
								</div>
								<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
									<div class="form-group">
			      						<label for="discount" class="col-lg-3 control-label">Descuento</label>
			      						@if($pedido->discount == "1")
			            					<input type="text" class="form-control" value="Con Descuento" disabled="true">
						            	@else
						            		<input type="checkbox" class="form-control" value="Sin Descuento"  disabled="true">
						            	@endif
									</div>
								</div>
								<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
									<div class="form-group">
			      						<label for="text" class="col-lg-3 control-label">Estado</label>
						                @if($pedido->state == "1")
			            					<input type="text" class="form-control" value="Pedido en Curso" disabled="true">
						            	@else
						            		<input type="text" class="form-control" value="Pedido Finalizado" disabled="true">
						            	@endif
									</div>
								</div>
								<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
									<div class="form-group">
			      						<label for="comentary" class="col-lg-3 control-label">Comentarios</label>
						                <textarea class="form-control" rows = "5" cols = "60" name = "comentary" id="comentary" disabled="true">{{$pedido->comentary}}</textarea>
									</div>
								</div>
					</div>
	            	<div class="row">
		             		<div class="panel panel-primary">
		             			<div class="panel-body">
		             				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		             					<table class="table table-striped table-bordered table-condensed table-hover">
		             						<thead style="background-color: #A9D0F5">
		             							<th>Producto</th>
		             							<th>Tamaño</th>
		             							<th>Mitad</th>
		             							<th>Cantidad</th>
		             							<th>Precio</th>
		             						</thead>
		             						<tbody>
		             						@foreach($detalle as $detalle)
		             							<tr>
		             								<td>{{$detalle->product}}</td>
		             								<td>{{$detalle->size}}</td>
			             							<td>@if($detalle->half == "1")
			            									Media Pizza
						            					@else
						            						Pizza Entera
						            					@endif</td>
			             							<td>{{$detalle->quantity}}</td>
			             							<td>{{$detalle->price}}</td>
			             						</tr>
		             						@endforeach
		             						</tbody>
		             						<tfoot>
		             							<th>TOTAL</th>
		             							<th></th>
		             							<th></th>
		             							<th></th>
		             							<th>
		             								<h4>{{$pedido->total}}</h4>
		             							</th>
		             							@endforeach
		             						</tfoot>
		             						<tbody>
		             						</tbody>
		             					</table>
		             				</div>
		             			</div>
		             		
		             		</div>
		             					
		             	</div>		
					</div>
	            </div>
	        </div>
        </div>
    </div> 
@endsection