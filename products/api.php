<?php
include 'config.php'; //file koneksi

//menentukan parameter pengiriman disesuaikan field tabel / kebutuhan
if (isset($_POST['submit'])) {

    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $satuan = $_POST['satuan'];
    $harga  = $_POST['harga'];

    if ($id_barang == "" || $nama_barang == "") {

        echo "<script>alert(' Keranjang Belanja Anda Kosong');</script>";
        echo "<script>window.location.href ='https://daffaaldzakian.000webhostapp.com/products/'</script>";

    } else {
        $query = mysqli_query($koneksi, "INSERT INTO table_produk (id_barang,nama_barang,satuan,harga) VALUES ('$id_barang','$nama_barang','$satuan','$harga')") or die(mysqli_error($koneksi));
        
        if ($query) {
            //pesan jika berhasil menyimpan data ke tabel database

            echo "<script>alert('Selamat Data Belanja Anda Tersimpan') </script>";
            echo "<script>window.location.href ='https://daffaaldzakian.000webhostapp.com/products/results/'</script>";
           
        } else {

           
            echo "<script>alert(' Data Buku Anda Gagal Ditambahkan');</script>";
            echo "<script>window.location.href ='https://daffaalzakian.000webhostapp.com/products/'</script>";
            
        }

    }
     mysqli_close($koneksi);
} else {

    echo "tidak ada submit";
}
