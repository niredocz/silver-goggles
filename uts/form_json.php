<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="form_json.css">
    <title>PHP JSON</title>
</head>
<body>
    <?php 
        $sumber_json = 'http://nurchim.tech/Mobile/ambilUTSsiB.php';
        $konten_json = file_get_contents($sumber_json);
        $data_json = json_decode($konten_json, true);
    ?>
    <header>
        <h1>Menampilkan Data dengan JSON</h1>
        <p>made by Daffa Aldzakian Fauzi - SI-18B1</p>
    </header>
    <form action="" method="post">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-dark">
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">NIM</th>
                    <th class="text-center">Nama Lengkap Mahasiswa</th>
                    <th class="text-center">Program Studi</th>
                </tr>
                <tbody>
                <?php 
                    $no=1;
                    for($a=0; $a < count($data_json); $a++) {
                        print "<td class='text-center'>".$no."</td>";
                        print "<td class='text-center'>".$data_json[$a]['NIM']."</td>";
                        print "<td>".$data_json[$a]['Nama']."</td>";
                        print "<td class='text-center'>".$data_json[$a]['Progdi']."</td>";
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