var AdminAjax = {


    updateField: function (Url, Param) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: Url,
            dataType: 'json',
            data: {AppData: Param},
            success: function () {
                console.log('yesss');
            }
        });

        return 1;

    }


};