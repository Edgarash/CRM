$(document).ready(function () {
    $('#clienteid').on('input', function () {
        $('#equipos').selectpicker('render');
        var id = this.value;
        $('#clienteid').parent().removeClass('has-error');
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
                        $('#clientename').val(cliente.nombre + ' ' + cliente.apellidos);
                        $('#clienteRFC').val(cliente.RFC);
                        $('#clienteemail').val(cliente.email);
                        $('#clientedireccion').val(
                            'Ciudad: ' + cliente.ciudad + '\n' +
                            'Col: ' + cliente.colonia + '\n' +
                            'Calle: ' + cliente.calle + '\n' +
                            'CP: ' + cliente.cp + '\n' +
                            'REF: ' + cliente.referencia
                        );
                        cliente.equipos.forEach(equipo => {
                            var option = document.createElement('option');
                            $(option).attr('title', equipo.descripcion + ' ' + equipo.marca + ' Serie: ' + equipo.serie);
                            $(option).attr('data-tokens', equipo.descripcion + ' ' + equipo.marca + ' ' + equipo.serie);
                            option.value = equipo.id;
                            option.innerText =
                                equipo.descripcion + '; Marca: ' + equipo.marca + ', Modelo: ' +
                                equipo.modelo + ', No. Serie: ' + equipo.serie;
                            $('#equipos').append(option);
                        });
                        $('#equipos').selectpicker('refresh');
                        document.cliente = cliente;
                    } else {
                        limpiarCliente();
                        $('#clientename').css('color', 'red');
                        $('#clientename').val('NO EXISTE');
                        $('#clienteid').parent().addClass('has-error');
                    }
                }
            });
        } else {
            limpiarCliente();
        }
    });

    function limpiarCliente() {
        document.cliente = null;
        $('#clientename').css('color', '#555555');
        $('[data-cliente=datos]').val('');
        $('#equipos').val();
        $('#equipos').empty();
        $('#listaequipos').empty();
        $('#listaequipos').append('<tr><td colspan=5 class="text-center"><h4>No se han seleccionado equipos.</h4></td></tr>');
        // $('#clientename, #clienteRFC, #clienteemail, #clientedireccion').val('');
    }

    $('#equipos').on('change', function () {
        $('#listaeq')
        var equipos = $('#equipos').val();
        
        console.log($('#equipos').val());
    });
});
