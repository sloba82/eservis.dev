$(function() {

    //User logout
    $( ".dropdown-toggle" ).bind( "click", function() {
       $(".dropdown-menu").css('display', 'block');
    });
    $(".dropdown-menu").bind( "mouseleave", function() {
        $(this).hide('fast');
    });

    //Show hide apoitment form
    $( "#setappointment" ).click(function() {
        $( "#topContent" ).hide('fast');
        $( "#appoitment" ).show();
    });

    //datepicker
    $.datetimepicker.setLocale('sr-YU');
    $('#datetimepicker').datetimepicker(
        {
            beforeShowDay: function(date) {
                var day = date.getDay();
                return [(day != 0), ''];
            },
            allowTimes:[
                '08:00',
                '09:00',
                '10:00',
                '11:00',
                '12:00',
                '13:00',
                '14:00',
                '15:00',
                '16:00',
                ],
            dayOfWeekStart:'1',

        }
    );
    //end datepicker

    //form appoitment get values


/*$('#appoitmentForm').submit(function() {
    // get all the inputs into an array.
    var $inputs = $('#appoitmentForm:input');
*/
    // not sure if you wanted this, but I thought I'd add it.
    // get an associative array of just the values.
/*    var values = {};
    $inputs.each(function() {
        values[this.name] = $(this).val();
    });*/

/*
     $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })


      e.preventDefault(e);

        $.ajax({

        type:"POST",
        url:'/appoitment',
        data:$inputs,
        dataType: 'json',
        success: function(data){
            console.log(data);
        },
        error: function(data){

        }
    })
   
});
*/



    //end form values



});