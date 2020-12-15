<?php
 include("../config.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins',sans-serif;
            background-color: #335fff;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='160' height='160' viewBox='0 0 200 200'%3E%3Cpolygon fill='%2387b4fa' points='100 0 0 100 100 100 100 200 200 100 200 0'/%3E%3C/svg%3E");
        }
        .wrapper {
            margin-top: 30px;
            background: white;
            padding-bottom: 15px;
        }
        h2 {
            padding-top: 10px;
            text-align: center;
        }
    </style>
    <title>Tampil Data</title>
</head>
<body>
    <div class="container-sm wrapper">
        <h2>Data Produk</h2>
        <hr><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Satuan Barang</th>
                    <th scope="col">Harga Barang</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM table_produk_api"; $result = mysqli_query($koneksi, $sql);
                if (mysqli_num_rows($result) > 0) {$i = 0; while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?=$i++; ?></td>
                    <td><?=$row["id_barang"]; ?></td>
                    <td><?=$row["nama_barang"]; ?></td>
                    <td><?=$row["satuan"]; ?></td>
                    <td><?=$row["harga"]; ?></td>
                </tr>
            <?php
                }} else { echo "0 results"; }
            ?>
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>