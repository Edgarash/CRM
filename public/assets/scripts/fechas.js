$(function() {
    moment.locale('es');
    $('div[type="dtp"]').datetimepicker({
        format: 'YYYY-MM-DD'
    });

    // $("#datetimepicker6").datetimepicker();
    // $("#datetimepicker7").datetimepicker({
    //     // useCurrent: false
    // });
    $("#datetimepicker6").on("dp.change", function(e) {
        $("#datetimepicker7")
            .data("DateTimePicker")
            .minDate(e.date);
    });
    $("#datetimepicker7").on("dp.change", function(e) {
        $("#datetimepicker6")
            .data("DateTimePicker")
            .maxDate(e.date);
    });
});
