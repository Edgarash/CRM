$(document).ready(function () {
    $('#buscarfalla').on('click', function () {
        $.alert({
            title: 'Falla',
            content: '<div style="padding:15px"><label for="fallanombre">Nombre:</label><input type="text" class="form-control" id="fallanombre" name="fallanombre" placeholder="Nombre de la falla" required="required"><div id="TablaFallas" style="margin-top:5px"></div></div>',
            onContentReady: function () {
                BuscarFalla();
                $('#fallanombre').on('input', function () {
                    BuscarFalla($('#fallanombre').val());
                });
            },
            columnClass: 'col-xs-8 col-xs-offset-2',
        });
    });

    function BuscarFalla(Falla = "") {
        var csrf = $('input[name="_token"]').val();
        $.ajax({
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrf
            },
            url: '/Fallas/Buscar?Nombre=' + Falla,
            dataType: 'HTML',
            success: function (x, y, data) {
                document.getElementById('TablaFallas').innerHTML = data.responseText;
                $('[data-toggle="tooltip"]').tooltip();
            },
            error: function () {
                return 'ERROR';
            }
        });
    }
});
