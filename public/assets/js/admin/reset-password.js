$(function () {
    document.getElementById("button").classList.add('btn-disabled');

    $('#old-password').on('input', function() {
        var old_password = $('#old-password').val();
        var token = $('meta[name="csrf-token"]').attr('content');
        var url = '/password/verify_old_pass';

        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': token
            },
            url: url,
            data: {
                old_password: old_password
            },
            dataType: 'json',
            success: function (data) {
                if (data == false){
                    document.getElementById("alert-old-pass").style.display = 'block';
                    document.getElementById("button").classList.add('btn-disabled');
                } else {
                    document.getElementById("alert-old-pass").style.display = 'none';
                    document.getElementById("button").classList.remove('btn-disabled');
                }
            }
        });

    });
});