$(document).ready(function() {
    $('#clienteid').on('input', function() {
        var id = this.value;
        if (id != "") {
            var csrf = $('input[name="_token"]').val();
            $.ajax({
                url: '/Ordenes/Registrar/Cliente',
                data: {id:id},
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                success: function(data) {
                    console.log(JSON.parse(data));
                }
            });
        } else {
            $('#clientename, #clienteRFC').val('');
        }
    });
});