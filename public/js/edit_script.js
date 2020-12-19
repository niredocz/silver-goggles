$(document).ready(function() {
    $('.btn-edit').on('click',function(){
        // get data from button edit
        const nisn = $(this).data('nisn');
        const nama = $(this).data('nama');
        const tempat = $(this).data('tempat');
        const tanggal = $(this).data('tanggal');
        const asal_sekolah = $(this).data('sekolah');
        const alamat = $(this).data('alamat');
        const gender = $(this).data('gender');
        const agama = $(this).data('agama');
        // Set data to Form Edit
        $('.nisn_siswa').val(nisn);
        $('.nama_siswa').val(nama);
        // $('.tempat_tgl_lahir').val(ttl);
        $('.tempat_lahir').val(tempat);
        $('.tanggal_lahir').val(tanggal);
        $('.asal-sekolah').val(asal_sekolah);
        $('.alamat').val(alamat);
        $('.jenis_kelamin').val(gender).trigger('change');
        $('.agama').val(agama).trigger('change');
        // Call Modal Edit
        $('#editModal').modal('show');
    });

    // get Delete Product
    $('.btn-delete').on('click',function(){
        // get data from button edit
        const nisn = $(this).data('nisn');
        // Set data to Form Edit
        $('.nisn_siswa').val(nisn);
        // Call Modal Edit
        $('#deleteModal').modal('show');
    });
});