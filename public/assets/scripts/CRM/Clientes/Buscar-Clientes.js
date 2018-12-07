$(document).ready(function () {
    $('#buscarcliente').on('click', function () {
        $.alert({
            title: 'Cliente',
            icon: 'fa fa-2x fa-user',
            content: '<div style="padding:15px"><label for="clientenombre">Nombre:</label><input type="text" class="form-control" id="clientenombre" name="clientenombre" placeholder="Nombre del cliente" required="required"><div id="TablaClientes" style="margin-top:5px"></div></div>',
            onContentReady: function () {
                BuscarCliente();
                $('#clientenombre').on('input', function () {
                    BuscarCliente($('#clientenombre').val());
                });
            },
            columnClass: 'col-xs-8 col-xs-offset-2',
        });
    });

    function BuscarCliente(Cliente = "", Page = 1) {
        var csrf = $('input[name="_token"]').val();
        $.ajax({
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrf
            },
            url: '/Clientes/Buscar?Nombre=' + Cliente + '&page=' + Page,
            dataType: 'HTML',
            success: function (x, y, data) {
                document.getElementById('TablaClientes').innerHTML = data.responseText;
                $('[data-toggle="tooltip"]').tooltip();
                var pagination = $('#TablaClientes a.page-link').on('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    BuscarCliente($('#clientenombre').val(), this.href.substring(this.href.search("=") + 1));
                });
            },
            error: function () {
                return 'ERROR';
            }
        });
    }
});
