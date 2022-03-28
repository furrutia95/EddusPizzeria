@extends("theme.$theme.layout")
@section('titulo')
	Nuevo Pedido
@endsection
@section("scripts")
<script>
	$(document).ready(function(){
		$("#bt_add").click(function(){
			agregar();
		});
		$("#guardar").hide();
	});
	var cont=0;
	total=0;
	subtotal=[];
	mtd=0;
	p1=0;
	p2=0;
	calculo=0;
	$("#size").change(mostrarPrecio);
	$("#pidprod").change(mostrarPrecio);
	descuento=0;
	$("#discount").change(descontarTotal);
	function descontarTotal()
	{
		if($("#discount").prop('checked'))
		{
			descuento=2000;
			//CAMBIAR EL DESCUENTO APLICADO AL PEDIDO
			total = total - descuento;
		}
		else
		{
			total = total + descuento;
			descuento = 0;
		}
	}
	function mostrarPrecio()
	{
		tamañoProd=document.getElementById('size').value;
		//cantidadProd=document.getElementById('quantity').value;
		precioProd=document.getElementById('pidprod').value.split('_');
		switch (tamañoProd) {
		  case 'Pequeña':
		    $("#price").val(precioProd[1]);
		    break;
		  case 'Mediana':
		    $("#price").val(precioProd[2]);
		    break;
		  case 'Familiar':
		    $("#price").val(precioProd[3]);
		    break;
		  default:
		    console.log('UwU');
		}
	}
	function agregar()
	{
		precioProd=document.getElementById('pidprod').value.split('_');
		idprod=precioProd[0];
		prod=$("#pidprod option:selected").text();
		tamaño=$("#size option:selected").text();
		cantidad=$("#quantity").val();
		precio=$("#price").val();
		mitad=0;
		if ($("#half").prop('checked')) {
			mitad=1;
			if (mtd == 1) {
				mtd=0;
				p2 = precio;
				calculo=1;
			}
			else
			{
				mtd=1;
				p1 = precio;
			}
			
		}
		if (mitad==1) {
			mitext="Mitad de Pizza";
		}
		else
		{
			mitext="Pizza Completa";
		}
		if (idprod!="" && cantidad!="" && precio!="") {
			subtotal[cont]=(cantidad*precio);
			if (calculo == 1) {
				calculo = parseInt((parseInt(p1)+parseInt(p2))/2);
				total=total+calculo;				
				calculo = 0;
			}
			else
			{
				if (mtd==0) {
					total=total+subtotal[cont];
				}
			}
			var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">x</button></td><td><input type="hidden" name="idprod[]" value="'+idprod+'">'+prod+'</td><td><input type="hidden" name="tamaño[]" value="'+tamaño+'">'+tamaño+'</td><td><input type="hidden" name="mitad[]" value="'+mitad+'">'+mitext+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="hidden" name="precio[]" value="'+precio+'">'+precio+'</td><td>'+subtotal[cont]+'</td></tr>';
			cont++;
			limpiar();
			$("#total").html("$"+total);
			$("#total_venta").val(total);
			evaluar();
			$('#detalles').append(fila);
		}
	}
	function limpiar(){
		$("#quantity").val("1");
		if (mtd==1) {
			$("#price").prop("disabled", true);
			$("#quantity").prop("disabled", true);
			$("#size").prop("disabled", true);
			$("#half").prop("disabled", true);
		}
		else
		{
			$("#price").val("");
			$("#size").val("0");
			$("#price").prop("disabled", true);
			$("#quantity").prop("disabled", false);
			$("#size").prop("disabled", false);
			$("#half").prop("disabled", false);
			$("#half").prop("checked", false);
		}

	}
	function evaluar()
	{
		if (total > 0) {
			$("#guardar").show();
		}
		else
		{
			$("#guardar").hide();
		}
	}	

	function eliminar(index){
		total=total-subtotal[index];
		$("#total").html("$"+total);
		$("#total_venta").val(total);
		$("#fila"+index).remove();
		evaluar();
	}
</script>
@endsection
@section('contenido')
	<div class="row">
	        <div class="col-lg-12">
	        	@include('includes.form-error')
	        	@include('includes.mensaje')
	        	<div class="box box-danger">
	            <div class="box-header with-border">
	              <h3 class="box-title">Nuevo Pedido</h3>
	            </div>
	            <button type=""><i class="fa fa-fw fa-arrow-circle-o-left"></i><a href="{{url('admin/pedido')}}">Volver Atrás</a></button>
	            <form action="{{route('guardar_pedido')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
	              	@csrf
		            <div class="box-body">
		              	<div class="row">
		              		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			              		<div class="form-group">
		      						<label for="paymeth" class="col-lg-3 control-label requerido">Medio de Pago</label>
									<select name="paymeth" id="paymeth" class="form-control">
										<option value="Efectivo">Efectivo</option>
										<option value="Credito">Tarjeta de Credito</option>
										<option value="Baes">BAES</option>
									</select>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
								<div class="form-group">
		      						<label for="date" class="col-lg-3 control-label requerido">Fecha</label>
					                <input type="date" name="date" class="form-control">
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			              		<div class="form-group">
		      						<label for="type" class="col-lg-3 control-label requerido">Tipo de Pedido</label>
									<select name="type" id="type" class="form-control">
										<option value="Mesa">Mesa</option>
										<option value="Retirar">Retirar</option>
										<option value="Llevar">Llevar</option>
										<option value="Domicilio">Domicilio</option>
									</select>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
								<div class="form-group">
		      						<label for="discount" class="col-lg-3 control-label requerido">Descuento</label>
					                <input type="checkbox" name="discount" id="discount" value="1">
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
								<div class="form-group">
		      						<label for="comentary" class="col-lg-3 control-label requerido">Comentarios</label>
					                <textarea class="form-control" rows = "5" cols = "60" name = "comentary" id="comentary">Comentarios del pedido</textarea>
								</div>
							</div>
		             	</div>
		             	<div class="row">
		             		<div class="panel panel-primary">
		             			<div class="panel-body">
		             				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
		             					<div class="form-group">
		             						<label>Productos</label>
		             						<select name="pidprod" class="form-control selectpicker" id="pidprod" data-live-search="true">
		             							@foreach($products as $product)
		             								<option value="{{$product->id}}_{{$product->priceS}}_{{$product->priceM}}_{{$product->priceL}}">{{$product->name}}</option>
		             							@endforeach
		             						</select>
		             					</div>
		             				</div>
		             				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
		             					<div class="form-group">
		             						<label for="quantity">Cantidad</label>
		             						<input type="number" min="1" name="quantity" id="quantity" class="form-control" value="1">
		             					</div>
		             				</div>
		             				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
		             					<div class="form-group">
		             						<label>Tamaño</label>
		             						<select name="size" class="form-control selectpicker" id="size">
		             							<option value="0">Elegir Tamaño</option>}
		             							<option value="Pequeña">Pequeña</option>
		             							<option value="Mediana">Mediana</option>
		             							<option value="Familiar">Familiar</option>
		             						</select>
		             					</div>
		             				</div>
		             				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
		             					<div class="form-group">
		             						<label>Precio Unitario</label>
		             						<input type="text" name="price" id="price" disabled="true" class="form-control">
		             					</div>
		             				</div>
		             				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
		             					<div class="form-group">
		             						<label>Mitad</label>
		             						<input type="checkbox" name="half" id="half" value="1">
		             					</div>
		             				</div>
		             				<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
		             					<div class="form-group">
		             						<button type="button" id="bt_add" class="btn btn-primary">Añadir</button>
		             					</div>
		             				</div>
		             				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		             					<table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
		             						<thead style="background-color: #A9D0F5">
		             							<th>Opciones</th>
		             							<th>Producto</th>
		             							<th>Tamaño</th>
		             							<th>Mitad</th>
		             							<th>Cantidad</th>
		             							<th>Precio</th>
		             							<th>Subtotal</th>
		             						</thead>
		             						<tfoot>
		             							<th>TOTAL</th>
		             							<th></th>
		             							<th></th>
		             							<th></th>
		             							<th></th>
		             							<th></th>
		             							<th><h4 id="total">$0</h4><input type="hidden" name="total_venta" id="total_venta"></th>
		             						</tfoot>
		             						<tbody>
		             							
		             						</tbody>
		             					</table>
		             				</div>
		             			</div>
		             		</div>
		             					
		             	</div>		
					</div>
		              <div class="box-footer">
		              <div class="col-lg-3"></div>
		              <div class="col-lg-6" id="guardar">
		              @include('includes.boton-form-crear')	
		              </div>
		             </div>
	          	</form>
	        </div>
        </div>
    </div>
@endsection
