$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#judulModal').html('Tambah Data Mahasiswa');        
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function(){
        $('#judulModal').html('Ubah Data Mahasiwa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/mvcphp/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url:'http://localhost/mvcphp/public/mahasiswa/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#prodi').val(data.prodi);

            },
            error: function (response) {
                var responseJson = jQuery.parseJSON(response.responseText);
                console.log(responseJson.Message); //Logs the exception message
            }
        });
        
    });
});