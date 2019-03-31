$(function(){

    $('.tombolTambahData').on('click',function(){
       $('#exampleModalLabel').html('Tambah Data Mahasiswa' );
        $('.modal-footer button[type=submit]').html('Simpan Data');
    })
    


    $('.tampilModalUbah').on('click',function(){
        $('#exampleModalLabel').html('Ubah Data Mahasiswa' );
        $('.modal-footer button[type=submit]').html('Simpan Perubahan');
        $('.modal-body form').attr('action','http://localhost/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url:'http://localhost/phpmvc/public/mahasiswa/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#npm').val(data.npm);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });


});

