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
    $('i.fa-trash').confirm({
        title: 'Borrar falla?',
        content: 'Presione confirmar para borrar la falla o cancelar para salir. El mensaje se cerrará después de 5 segundos.',
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
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        processData: false,
                        url: '/Fallas/Accion',
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: {type:'D'},
                        dataType: 'JSON',
                        success: function(data) {
                            $.dialog({
                                content: data
                            });
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

    });
});
