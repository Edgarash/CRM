$(document).ready(function () {
    $('#clienteid').on('input', function () {
        var id = this.value;
        if (id != "") {
            var csrf = $('input[name="_token"]').val();
            $.ajax({
                url: '/Ordenes/Registrar/Cliente',
                data: {
                    id: id
                },
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                success: function (data) {
                    var response = JSON.parse(data);
                    if (response.code == 1) {
                        var cliente = JSON.parse(response.message);
                        limpiarCliente();
                        $('#clientename').val(cliente.nombre+' '+cliente.apellidos);
                        $('#clienteRFC').val(cliente.RFC);
                        $('#clienteemail').val(cliente.email);
                        $('#clientedireccion').val(
                            'Ciudad: '+cliente.ciudad+'\n'+
                            'Col: '+cliente.colonia+'\n'+
                            'Calle: '+cliente.calle+'\n'+
                            'CP: '+cliente.cp+'\n'+
                            'REF: '+cliente.referencia
                        );
                    } else {
                        limpiarCliente();
                        $('#clientename').css('color', 'red');
                        $('#clientename').val('NO EXISTE');
                    }
                }
            });
        } else {
            limpiarCliente();
        }
    });

    function limpiarCliente() {
        $('#clientename').css('color', '#555555');
        $('[data-cliente=datos]').val('');
        // $('#clientename, #clienteRFC, #clienteemail, #clientedireccion').val('');
    }
});