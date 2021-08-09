$(function() { 

    $('.tombolUpdateData').on('click', function() {
        
        $('#formModalLabel').html('Update Data Mahasiswa');
        $('.modal-footer button[type=submit]' ).html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/update');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#name').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });

    $('.tombolTambahData').on('click', function() {

        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]' ).html('Tambah Data');
        $('#name').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#id').val('');
    });

}); 