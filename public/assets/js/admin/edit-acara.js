$(function () {

    // Pilih jenis kegiatan berdasarkan kelompok kegiatan
    $('#input_kelompok_kegiatan').on('change', function () {

        if ( $(this).val() == '-' ) {
            $('#input_jenis_kegiatan').empty();
            $('#input_jenis_kegiatan').append(new Option('----------', '-'));
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else {

            var id_kelompok_kegiatan = $(this).val();
            var token = $('meta[name="csrf-token"]').attr('content');
            var url = '/admin/req-data-jenis-kegiatan';

            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                url: url,
                data: {
                    id: id_kelompok_kegiatan
                },
                dataType: 'json',
                success: function (data) {
                    $('#input_jenis_kegiatan').empty();
                    $('#input_jenis_kegiatan').append(new Option('----------', '-'));
                    $('#input_tingkat').empty();
                    $('#input_tingkat').append(new Option('----------', '-'));

                    data.forEach(function (data) {
                        $('#input_jenis_kegiatan').append(new Option(data.JENIS_KEGIATAN, data.ID_JENIS_KEGIATAN));
                    });
                }
            });

        }
    
    });

    // Pilih tingkat berdasarkan jenis kegiatan
    $('#input_jenis_kegiatan').on('change', function () {

        if ( $(this).val() == null ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 1 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Universitas', 4));
        } else if ( $(this).val() == 2 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 3 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 4 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Universitas', 4));
        } else if ( $(this).val() == 5 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Departemen/Program Studi', 1));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('UKM', 3));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Internasional', 9));
        } else if ( $(this).val() == 6 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Departemen/Program Studi', 1));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Internasional', 9));
            $('#input_tingkat').append(new Option('Lainnya', 10));
        } else if ( $(this).val() == 7 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Dasar', 11));
            $('#input_tingkat').append(new Option('Menengah', 12));
            $('#input_tingkat').append(new Option('Lanjut', 13));
        } else if ( $(this).val() == 8 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 9 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Departemen/Program Studi', 1));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Internasional', 9));
        } else if ( $(this).val() == 10 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Departemen/Program Studi', 1));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
        } else if ( $(this).val() == 11 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Departemen/Program Studi', 1));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
        } else if ( $(this).val() == 12 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Departemen/Program Studi', 1));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Regional', 5));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Internasional', 9));
        } else if ( $(this).val() == 13 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Departemen/Program Studi', 1));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Regional', 5));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Internasional', 9));
        } else if ( $(this).val() == 14 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Departemen/Program Studi', 1));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Regional', 5));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Internasional', 9));
        } else if ( $(this).val() == 15 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 16 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Nasional Ter-Akreditasi', 7));
            $('#input_tingkat').append(new Option('Nasional Tidak Ter-Akreditasi', 8));
            $('#input_tingkat').append(new Option('Internasional', 9));
        } else if ( $(this).val() == 17 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Regional', 5));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Internasional', 9));
        } else if ( $(this).val() == 18 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 19 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 20 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 21 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 22 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 23 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Regional', 5));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Internasional', 9));
        } else if ( $(this).val() == 24 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Regional', 5));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Internasional', 9));
        } else if ( $(this).val() == 25 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Regional', 5));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Internasional', 9));
        } else if ( $(this).val() == 26 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Lainnya', 10));
        } else if ( $(this).val() == 27 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 28 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 29 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 30 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 31 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 32 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
            $('#input_tingkat').append(new Option('Departemen/Program Studi', 1));
            $('#input_tingkat').append(new Option('Fakultas', 2));
            $('#input_tingkat').append(new Option('Universitas', 4));
            $('#input_tingkat').append(new Option('Regional', 5));
            $('#input_tingkat').append(new Option('Nasional', 6));
            $('#input_tingkat').append(new Option('Internasional', 9));
        } else if ( $(this).val() == 33 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 34 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 35 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 36 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 37 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 38 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 39 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 40 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 41 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 42 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        } else if ( $(this).val() == 43 ) {
            $('#input_tingkat').empty();
            $('#input_tingkat').append(new Option('----------', '-'));
        }

    });

});

// Validation 
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();