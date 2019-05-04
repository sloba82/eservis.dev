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
        delay: 300,
        position: { my : "right top", at: "right bottom" }
    });

    $('#numberplate').on('change keypress focus', function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache: false
            });
            var term = $( "#numberplate").val();
            $.ajax({
                type: 'POST',
                url: '/serviceautocomplate',
                dataType: 'json',
                data: {
                    AppData: {
                        term : term
                    }
                },
                success: function (response) {


                    console.log(response);
                    $( "#numberplate" ).autocomplete({
                        source: response
                    });
                }
            });
    });

    var currentdate = new Date();
    var dt = new Date();
    $('#service_date').val(  currentdate.getDate() + "/" + (currentdate.getMonth() + 1)+  "/" + currentdate.getFullYear()+" "+ currentdate.getHours() +":"+ currentdate.getMinutes());



    $('[name="allresoult_length"]').on('change', function(){



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            cache: false
        });
        var term =$('[name="allresoult_length"]').val();
        $.ajax({
            type: 'POST',
            url: '/appointment-resoultPerPage',
            dataType: 'json',
            data: {
                AppData: {
                    term : term
                }
            },
            success: function (response) {

            }
        });

     /*   $('#example').dataTable( {
            "pageLength": term
        } );*/


    });




});