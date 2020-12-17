<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- <link rel="stylesheet" href="https://code.jquery.com/resources/demos/style.css"> -->
    </head>
    <body>
        <h1>test datepicker</h1>
        <div class="bootstrap-iso">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <form method="post">
                            <div class="form-group"> <!-- Date input -->
                                <label class="control-label" for="date">Date</label>
                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                            </div>
                            <div class="form-group"> <!-- Submit button -->
                                <button class="btn btn-primary " name="submit" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <input type="text" class="form-control" id="datepicker">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <input type="text" class="form-control" id="alternate" readonly>
                </div>
            </div>
        </div>
        <?php foreach($data_siswa as $row):?>
        <tr>
            <td><?=$row->nis;?></td>
            <td><?=$row->nama;?></td>
            <td><?=$row->tempat_lahir;?></td>
            <td><?=$row->tanggal_lahir;?></td>
            <td><?=$row->asal_sekolah;?></td>
            <td><?=$row->alamat;?></td>
            <td><?=$row->jenis_kelamin;?></td>
            <td><?=$row->nama_agama;?></td>
        </tr>
        <?php endforeach; ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->
<script src="<?= base_url('js/jquery.min.js')?> "></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="<?= base_url('assets/jquery-ui/jquery-ui.min.js')?> "></script>
<script src="<?= base_url('js/datepicker-id.js')?>" type="text/javascript"></script>
<script>
    $(document).ready(function(){
    //   var date_input=$('input[name="date"]'); //our date input has the name "date"
    //   var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    //   var options={
    //     format: 'mm/dd/yyyy',
    //     container: container,
    //     todayHighlight: true,
    //     autoclose: true,
    //   };
    //   date_input.datepicker(options);
        $( "#datepicker" ).datepicker({
        altField: "#alternate",
        dateFormat: "yy-mm-dd",
        altFormat: "DD, d MM, yy",
        changeMonth: true,
        changeYear: true,
        yearRange: "-25:+0",
        autoSize: true
        });
    })
                
</script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->
</body>
</html>