$(document).ready(function () {
    // 
    // Tooltip
    // 
    $('[data-toggle="tooltip"]').tooltip();
    // 
    // Cambiar nombre falla
    //     
    $('i.fa-cog').on('click', function () {
        console.log('algo');
        $.dialog({
            title: 'Alert!',
            content: 'Simple alert!',
        });
    });
    // 
    // Borrar Falla
    //     
    $('i.fa-trash').on('click', function () {
        var x = $(this).closest('tr');
        $.confirm({
            title: 'Borrar Empleado?',
            content: 'Presione confirmar para borrar el Empleado o cancelar para salir. El mensaje se cerrará después de 5 segundos.',
            autoClose: 'cancel|5000',
            icon: 'fa fa-warning btn-red',
            theme: 'modern',
            type: 'orange',
            backgroundDismiss: true,
            buttons: {
                confirm: {
                    text: 'CONFIRMAR',
                    btnClass: 'btn-green',
                    action: function () {
                        var csrf = $('input[name="_token"]').val();
                        console.log(csrf);
                        $.ajax({
                            url: x.attr('id'),
                            type: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': csrf
                            },
                            success: function (data) {
                                var response = JSON.parse(data);
                                if (response.title == 'SUCCESS') {
                                    location.reload();
                                } else {
                                    $.alert({
                                        title: 'ERROR',
                                        content: response.message,
                                        theme: 'modern',
                                        type: 'red',
                                        icon: 'fa fa-exclamation'
                                    });
                                }
                            },
                            error: function (data) {

                            }
                        });
                    }
                },
                cancel: {
                    text: 'CANCELAR',
                    btnClass: 'btn-red',
                    action: function () {}
                }
            }
        })
    });
});
