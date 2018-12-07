$(document).ready(function () {
    var buscar = $.alert({
        title: 'Cliente',
        lazyOpen: true,
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
    $('#buscarcliente').on('click', function () {
        buscar.open();
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
                var pagination = $('#TablaClientes a.page-link').on('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    BuscarCliente($('#clientenombre').val(), this.href.substring(this.href.search("=") + 1));
                });
                $('button[data-cliente]').on('click', function (e) {
                    $('#clienteid').val($(this).attr('data-cliente'));
                    $('#clienteid').trigger('input');
                    buscar.close();
                });
            },
            error: function () {
                return 'ERROR';
            }
        });
    }
});
