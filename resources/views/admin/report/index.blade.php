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
	              <h3 class="box-title">Reporte</h3>
	            </div>
	            <div class="container">
				<div class="row">
					<div class="slide_uno col-md-12 col-sm-12 col-xs-12">
						<h2 class="text-center">Exportar Datos a PDF por Rango de Fecha</h2>
						<div class="clearfix"></div>
						<form action="{{route('buscar_reporte')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
	              		@csrf
		            	<div class="box-body">
		              		<div class="row">
			              		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
									<div class="form-group">
										<label for="date" class="col-lg-3 control-label requerido">Fecha</label>
			      						@if($inicio == "1")
				            				<input type="date" name="inicio" class="form-control" required>
				            			@else
				            				<input type="date" name="inicio" class="form-control" value="{{$inicio}}" required>
				            			@endif
						            </div>
								</div>
								<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
									<div class="form-group">
			      						<label for="date" class="col-lg-3 control-label requerido">Fecha</label>
						                @if($fin == "1")
				            				<input type="date" name="fin" class="form-control" required>
				            			@else
				            				<input type="date" name="fin" class="form-control" value="{{$fin}}" required>
				            			@endif
									</div>
								</div>
								<button type="submit" class="btn btn-light">Buscar</button>
							</div>
						</form>
						<form action="{{route('generar_reporte')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
	              		@csrf
		            	<div class="box-body">
		              		<div class="row">
			              		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
									<div class="form-group hidden">
										<label for="date" class="col-lg-3 control-label requerido">Fecha</label>
			      						@if($inicio == "1")
				            				<input type="date" name="inicio" class="form-control" >
				            			@else
				            				<input type="date" name="inicio" class="form-control" value="{{$inicio}}" >
				            			@endif
						            </div>
								</div>
								<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
									<div class="form-group hidden">
			      						<label for="date" class="col-lg-3 control-label requerido">Fecha</label>
						                @if($fin == "1")
				            				<input type="date" name="fin" class="form-control" >
				            			@else
				            				<input type="date" name="fin" class="form-control" value="{{$fin}}" >
				            			@endif
									</div>
								</div>
								<button type="submit" class="btn btn-danger">Generar Reporte</button>
							</div>
						</form>

							<table class="table table-striped table-bordered">
							
							</div>
							<div class="row">
								<thead>
								<tr>
									<th width="10">N°</th>
									<th width="30">Medio de Pago</th>
									<th width="30">Fecha</th>
									<th width="30">Tipo de Pedido</th>
									<th width="30">Descuento</th>
									<th width="30">Total</th>
		            				<th width="30">Estado</th>
		            				<th width="30">Comentarios</th>	 
								</tr>
								</thead>
								<!-- CONTENEDOR DONDE SE IMPRIMEN LA CONSULTA POR FECHAS -->
								<tbody id="actualizar">
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
							</div>
						</table>
					</div>
				</div>
			</div>
	            
	        </div>
        </div>
    </div> 
@endsection