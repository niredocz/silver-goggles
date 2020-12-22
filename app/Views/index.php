<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=$title?></title>
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
                    <h4 class="font-weight-bold text-dark">Hai, Selamat datang di SMA Negeri 01 Surakarta!</h4>
                    <br>
                    <p class="font-weight-normal mb-2 text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMAN 01 Surakarta adalah salah satu sekolah favorit di Surakarta. Lulusan kami sangat berkualitas sehingga banyak dari mereka yang memainkan peran penting di tingkat pemerintahan.</p>
                    <p class="font-weight-normal mb-2 text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMAN 01 Surakarta senantiasa melakukan pembenahan di segala aspek, khususnya sumber daya manusianya. Kami meningkatkan kapasitas guru dan anggota staf kami dengan menyediakan program pelatihan dan pengembangan. Kami juga ingin meningkatkan fasilitas sekolah kami, seperti laboratorium, Teknologi Informasi dan Komunikasi (TIK), olahraga dan seni serta fasilitas lain yang dapat mendukung proses belajar mengajar di SMAN 1 Surakarta.</p>
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
  <script src="<?= base_url('assets/vendors/base/vendor.bundle.base.js')?> "></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url('assets/js/off-canvas.js')?> "></script>
  <script src="<?= base_url('assets/js/hoverable-collapse.js')?> "></script>
  <script src="<?= base_url('assets/js/template.js')?> "></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?= base_url('assets/vendors/chart.js/Chart.min.js')?> "></script>
  <script src="<?= base_url('assets/vendors/jquery-bar-rating/jquery.barrating.min.js')?> "></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('assets/js/dashboard.js')?> "></script>
  <!-- End custom js for this page-->
</body>

</html>

