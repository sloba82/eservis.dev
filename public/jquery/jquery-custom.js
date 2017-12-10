$(function() {

    $( ".dropdown-toggle" ).bind( "click", function() {
       $(".dropdown-menu").css('display', 'block');
    });

    //form datepicker
    $('#datepicker').datepicker( {
        format: 'dd/mm/yyyy',
        startDate: '-3d',
        language: 'en'
        }
    );

    $( "#setappointment" ).click(function() {
        $( "#topContent" ).hide('fast');
        $( "#appoitment" ).show();

    });



});