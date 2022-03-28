$(document).ready(function () {
    $("#tabla-data").on('submit', '.form-eliminar', function (event) {
        event.preventDefault();
        const form = $(this);
        swal({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer!",
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                confirm: "Aceptar"
            },
        }).then((value) => {
            if (value) {
                ajaxRequest(form.serialize(), form.attr('action'), 'eliminarPromocion', form);
            }
        });
    });

    $('.ver-promocion').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        const data = {
            _token: $('input[name=_token]').val()
        }
        ajaxRequest(data, url, 'verPromocion');
    });

    function ajaxRequest(data, url, funcion, form = false) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (respuesta) {
                if (funcion == 'eliminarPromocion') {
                    if (respuesta.mensaje == "ok") {
                        form.parents('tr').remove();
                        Pizzeria.notificaciones('El registro fue eliminado correctamente', 'Pizzeria', 'success');
                    } else {
                        Pizzeria.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'Pizzeria', 'error');
                    }
                } else if (funcion == 'verPromocion') {
                    $('#modal-ver-promocion .modal-body').html(respuesta)
                    $('#modal-ver-promocion').modal('show');
                }
            },
            error: function () {

            }
        });
    }
});