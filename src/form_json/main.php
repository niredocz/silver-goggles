<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>PHP JSON</title>
</head>
<body>
    <?php 
        $sumber_json = 'http://nurchim.tech/Mobile/ambilDataSIB.php';
        $konten_json = file_get_contents($sumber_json);
        $data_json = json_decode($konten_json, true);
    ?>
    <h1>Menampilkan Data dengan JSON</h1>
    <p>made by Daffa Aldzakian Fauzi - 180101049</p>
    <form action="" method="post">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">NIM</th>
                </tr>
                <tbody>
                <?php 
                    $no=1;
                    for($a=0; $a < count($data_json); $a++) {
                        print "<td align='center'>".$no."</td>";
                        print "<td align='center'>".$data_json[$a]['password']."</td>";
                        print "</tr>";
                        $no++;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </form>
</body>
</html>