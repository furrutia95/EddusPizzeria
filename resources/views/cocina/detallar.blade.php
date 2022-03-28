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
	            	<button type=""><i class="fa fa-fw fa-arrow-circle-o-left"></i><a href="{{url('cocina')}}">Volver Atrás</a></button>
	            	<h3 class="box-title">Pedido n° {{$id}}</h3>
	            </div>
	            <!--Fin Buscador-->
	            <div class="box-body">
	            	<div class="row">
	            		@foreach($pedido as $pedido)
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
		             							<th><h2>Producto</h2></th>
		             							<th><h2>Tamaño</h2></th>
		             							<th><h2>Mitad</h2></th>
		             							<th><h2>Cantidad</h2></th>
		             						</thead>
		             						<tbody>
		             						@foreach($detalle as $detalle)
		             							<tr>
		             								<td><h3>{{$detalle->product}}</h3></td>
		             								<td><h3>{{$detalle->size}}</h3></td>
			             							<td>@if($detalle->half == "1")
			            									<h3>Media Pizza</h3>
						            					@else
						            						<h3>Pizza Entera</h3>
						            					@endif</td>
			             							<td><h3>{{$detalle->quantity}}</h3></td>
			             							
			             						</tr>
		             						@endforeach
		             						</tbody>
		             	@endforeach
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