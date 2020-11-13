// "use strict";
$( function () {
    // Data table
    $('.datatable-table').DataTable();

    /* -- Form - Input Mask -- */
    $('#inputmask-cari').inputmask('Regex', {regex: "^[0-9]{1,12}"});

    $('.tombol-cari-nim').on('click', function () {

        $('.table-body').empty();
        $('.msg').empty();
        $('#table-acara').addClass('d-none');

        var input_nim = $('#inputmask-cari').val();
        var req_url = '/cari-mahasiswa/find-data';
        var token = $('meta[name="csrf-token"]').attr('content');
        
        if ( input_nim != '' ){
            
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                url: req_url,
                data: {
                    id: input_nim
                },
                dataType: 'json',
                error: function(data){
                    var msg = data.responseJSON.error_msg;
                    var result = '<div class="d-flex error-msg justify-content-center">' +
                                    '<h5>' + msg + '</h5>' +
                                  '</div>';
                    
                    $('.msg').append(result);
                },
                success: function(data){
                    var detail = '<div class="row">' +
                                        '<div class="col-md-1 col-sm-3">' +
                                            '<h6>Nama</h6>' +
                                        '</div>' +
                                        '<div class="col-md-4">' +
                                            '<h6>: ' + data[0][0].nama + '</h6>' +
                                        '</div>' +
                                  '</div>' +
                                  '<div class="row">' +
                                        '<div class="col-md-1 col-sm-3">' +
                                            '<h6>NIM</h6>' +
                                        '</div>' +
                                        '<div class="col-md-4">' +
                                            '<h6>: ' + input_nim + '</h6>' +
                                        '</div>' +
                                  '</div>' +
                                  '<div class="row mt-4">' +
                                        '<div class="col-md-4">' +
                                            '<h6>Daftar acara yang pernah diikuti</h6>' +
                                        '</div>' +
                                  '</div>';
                    
                    $('.msg').append(detail);
                    $('#table-acara').removeClass('d-none');

                    for (let i = 1; i < data.length; i++) {
                        var row = '<tr>' +
                                        '<td>' + data[i][0].ID_ACARA + '</td>' +
                                        '<td>' + data[i][0].NAMA_ACARA + '</td>' +
                                   '</tr>';

                        $('.table-body').append(row);
                    }

                }
            });

        }

    });


});