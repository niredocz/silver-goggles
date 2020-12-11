<?php
$servername = "localhost:3306";
$username = "id14879459_daffa_aldzakian";
$password = "BEkPzq7*8Ofep5Hh";
$dbname = "id14879459_db_transaksi";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);
if (!$koneksi){
        die("Connection Failed:".mysqli_connect_error());
    }
?>
