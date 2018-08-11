$(function() {

    $('#datetimepicker').datetimepicker({
    });



    $('button').on('click', function() {
        var ButtonID = this.id;
        if(ButtonID) {
            var Url =  '/appoitment/ajaxConfirm';
            var Param = {
                id : ButtonID
            };

            if (AdminAjax.updateField(Url, Param)) {
                $(this).attr('disabled', true);
                $(this).closest('tr').addClass('confirm');
            }

        }
    });

});