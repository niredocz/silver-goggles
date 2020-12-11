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
        label, .input-group-text {
            font-size: 13px;
        }
        h5 {
            text-align: center;
        }
        .wrapper {
            padding: 45px;
            margin-top: 50px;
            background: white;
            border-radius: 15px;
            width: 500px;
        }
        form {
            width: 400px;
        }
    </style>
    <title>Halaman Input Product Dengan API</title>
</head>
<body>
    <div class="container-sm wrapper">
        <form action="api.php" method="post">
            <h5>Silahkan Input Data Belanja Anda</h5>
            <hr>
            <div class="form-group">
                <label for="id_barang">ID Barang</label>
                <input type="text" name="id_barang" class="form-control form-control-lg" id="id_barang" aria-describedby="id_barang">
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control form-control-lg" id="nama_barang" aria-describedby="nama_barang">
            </div>
            <div class="form-group">
                <label for="sel1">Select list:</label>
                <select class="form-control" name="satuan">
                    <option value="kilogram">Kilogram (Kg)</option>
                    <option value="ikat">Ikat</option>
                    <option value="lusin">Lusin</option>
                    <option value="rim">Rim</option>
                    <option value="liter">Liter (ltr)</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="width:10em;">Rp.</span>
                </div>
                <input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" class="form-control form-control-lg" name="harga" aria-label="Amount (to the nearest rupiah)">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-lg">Submit</button>
        </form>
    </div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>