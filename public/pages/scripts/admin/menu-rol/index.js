$('.menu_rol').on('change', function () {
    data = {
        menu_id: $(this).data('menuid'),
        rol_id: $(this).val(),
        _token: $('input[name=_token]').val()
    };
    if ($(this).is(':checked')) {
        data.estado = 1
    } else {
        data.estado = 0
    }
    console.log(data);
    ajaxRequest('/admin/menu-rol', data);
});

function ajaxRequest (url, datos) {
    $.ajax({
        url: url,
        type: 'POST',
        data: datos,
        success: function (respuesta) {
            Pizzeria.notificaciones(respuesta.respuesta, 'Pizzeria', 'success');
        },
        error: function (datos) {
        console.log(datos);
        } 
    });
}