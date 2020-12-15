<?php 
// pemanggilan file koneksi database 
// include("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan API dalam bentuk JSON</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins',sans-serif;
            background-color: #335fff;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='160' height='160' viewBox='0 0 200 200'%3E%3Cpolygon fill='%2387b4fa' points='100 0 0 100 100 100 100 200 200 100 200 0'/%3E%3C/svg%3E");
        }
        h1 {
            text-align: center;
        }
        .wrapper {
            background-color: white;
            border-radius: 15px;
            height: 80vh;
            width: 80%;
            margin: 10px auto;
            padding: 5px;
        }
        .kolom {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="wrapper">
    <h1>Menampilkan API dalam bentuk JSON</h1>
        <div class="row">
            <div class="col-md-6 kolom">
                <h5>test</h5>
            </div>
            <div class="col-md-6 kolom">
            <h5>test 2</h5>
            <?php
                // //perintah memanggil data di tabel database
                // $query = mysqli_query($koneksi, "SELECT * FROM table_produk_api") or die(mysqli_error($koneksi));

                // //menampilkan data di tabel database
                // $data = array();
                // while($row = mysqli_fetch_assoc($query))
                // {
                //     $data[] = $row; 
                // }

                // //konversi data di dalam tabel database menjadi JSON
                // echo json_encode($data);

                // //menutup koneksi database
                // mysqli_close($koneksi);
            ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>