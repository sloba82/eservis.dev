$(function() {




    $('.toService').on('click', function () {
        $('#cardReader').attr('action', '/sendCarToService');
        $('input').each(function () {
            $(this).removeAttr('disabled');
        });
    });




/*$('.toService').on('click', function () {
   var Data = $('form').serializeArray();

    console.log(Data);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        cache: false
    });

    $.ajax({
        type: 'POST',
        url: '/sendCarToService',
        dataType: 'json',
        data: Data,
        success: function (response) {

        }
    });


});*/






});