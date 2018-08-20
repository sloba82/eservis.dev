$(function () {


    $('#datetimepicker').datetimepicker({});

    $('#allresoult').DataTable({
        order: [[0, "desc"]],
        columnDefs: [
            {
                targets: -1,
                className: 'dt-body-right'
            }
        ],
        search: {
            "smart": true
        }
    });

    $('button').on('click', function () {

        if (this.id) {
            var Param = {
                url: '/appoitment/ajaxConfirm',
                id: this.id,
                field: $(this).attr('data-action')
            };

            AdminAjax.updateField(Param);
            $(this).attr('disabled', true);
            $(this).closest('tr').addClass('confirm');

        }
    });







    $( "#numberplate" ).autocomplete({
        autoFocus: true,
        delay: 500,
        position: { my : "right top", at: "right bottom" }
    });

    $( "#numberplate").on('change keypress focus', function(){


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var term = $( "#numberplate").val();

        var Param = {
            term : term
        };

        $.ajax({
            type: 'POST',
            url: '/serviceautocomplate',
            dataType: 'json',
            data: {AppData: Param},
            success: function (data) {

            }
        });

        $.ajax('/serviceautocomplate', {
            dataType: 'json',
            type: 'get',
            success: function(response) {

                $( "#numberplate" ).autocomplete({
                    source: response
                });

            }
        });

    });



});