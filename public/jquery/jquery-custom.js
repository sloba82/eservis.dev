$(function() {

    $( ".dropdown-toggle" ).bind( "click", function() {
       $(".dropdown-menu").css('display', 'block');
    });

    $( "#setappointment" ).click(function() {
        $( "#topContent" ).hide('fast');
        $( "#appoitment" ).show();

    });



});