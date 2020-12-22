<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cetak Laporan - SMAN 01 Surakarta</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/mdi/css/materialdesignicons.min.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/feather/feather.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/base/vendor.bundle.base.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/jquery-bar-rating/fontawesome-stars-o.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/jquery-bar-rating/fontawesome-stars.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?> ">
  <link rel="shortcut icon" href="<?= base_url('assets/images/mini-nav-logo.png')?> "/>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="<?= base_url('/')?> "><img src="<?= base_url('assets/images/nav-logo.png')?>" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url('/')?> "><img src="<?= base_url('assets/images/mini-nav-logo.png')?>" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid page-body-wrapper">
      <!-- Start Sidebar -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="<?= base_url('assets/images/user-icon.png')?> ">
            <div class="user-name">Adminku</div>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/registrasi')?>">
              <i class="icon-square-plus menu-icon"></i>
              <span class="menu-title">Daftar Siswa Baru</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/tabel-siswa')?>">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Tabel Data Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/cetak-laporan')?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Cetak Laporan</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="col-sm-12 mb-4 mb-xl-0">
                    <h6 class="font-weight-bold text-dark">Cetak Laporan Data Siswa</h6>
                    <p class="font-weight-normal mb-2 text-muted">Silahkan klik tombol <strong>Download PDF</strong> untuk mencetak laporan pada tabel dibawah ini dalam format PDF</p>
                    <div class="d-flex flex-row-reverse bd-highlight">
                      <!-- <button class="btn btn-primary pdf">Download PDF</button> -->
                      <a href="<?php echo base_url('/pdf') ?>">Generate</a>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="printContent">
                        <thead>
                          <tr>
                            <th class="text-center">NISN</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Tempat/Tanggal Lahir</th>
                            <th class="text-center">Asal Sekolah</th>
                            <th class="text-center">Alamat Tinggal</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Agama</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($data_siswa as $row): ?>
                          <tr>
                            <td><?=$row->nisn;?></td>
                            <td><?=$row->nama;?></td>
                            <td><?=$row->tempat_lahir .', '. date('d-m-Y', strtotime($row->tanggal_lahir))?></td>
                            <td><?=$row->asal_sekolah;?></td>
                            <td><?=$row->alamat;?></td>
                            <td><?=$row->nama_gender;?></td>
                            <td><?=$row->nama_agama;?></td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        
        <!-- Footer -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Daffa Aldzakian F 2020</span>
          </div>
        </footer>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="<?= base_url('js/jquery.min.js')?> "></script>
  <script src="<?= base_url('js/bootstrap.min.js')?> "></script>
  <script src="<?= base_url('assets/vendors/base/vendor.bundle.base.js')?> "></script>
  <!-- inject:js -->
  <script src="<?= base_url('assets/js/off-canvas.js')?> "></script>
  <script src="<?= base_url('assets/js/hoverable-collapse.js')?> "></script>
  <script src="<?= base_url('assets/js/template.js')?> "></script>

  <!-- Custom js for this page-->
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="<?= base_url('assets/jquery-ui/jquery-ui.min.js')?> "></script>
  <script src="<?= base_url('js/datepicker-id.js')?>" type="text/javascript"></script>
  <script src="<?= base_url('js/script.js')?>"></script>
  
  <!-- End custom js for this page-->
</body>

</html>

