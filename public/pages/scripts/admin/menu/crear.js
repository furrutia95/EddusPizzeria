$(document).ready(function () {
	Pizzeria.validacionGeneral('form-general');
	$('#icono').on('blur', function() {
		$('#mostrar-icono').removeClass().addClass('fa fa-fw' + $(this).val());
	});
});