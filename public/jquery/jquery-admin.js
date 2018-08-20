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

    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];
    $( "#numberplate" ).autocomplete({
        source: availableTags
    });



});