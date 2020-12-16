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
  <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png')?> "/>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
  <div class="container-scroller">
    <!-- Navbar -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="<?= base_url('/')?> "><img src="<?= base_url('assets/images/logo.svg')?>" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url('/')?> "><img src="<?= base_url('assets/images/logo-mini.svg')?>" alt="logo"/></a>
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
        <!-- <ul class="navbar-nav navbar-nav-right">   
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item" href="">
                  <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
        </ul> -->
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
    <!-- Sidebar -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="<?= base_url('assets/images/faces/face28.png')?> ">
          </div>
          <div class="user-name">Edward Spencer</div>
          <div class="user-designation">Developer</div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/tambah')?>">
              <i class="icon-square-plus menu-icon"></i>
              <span class="menu-title">Tambah Data Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/tampil')?>">
              <i class="icon-monitor menu-icon"></i>
              <span class="menu-title">Tampil Data Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/edit')?>">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Edit Data Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/report')?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Form Laporan</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Start Main Content -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="col-sm-12 mb-4 mb-xl-0">
                    <h4 class="card-title">Tambah Data Siswa</h4>
                    <p class="card-description">Formulir tambah data siswa</p>
                    <form class="forms-sample">
                      <div class="form-group row">
                        <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="nis" placeholder="Nomor Induk Siswa">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-3 col-form-label">Nama Lengkap Siswa</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="nama_siswa" placeholder="Nama Lengkap">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tempat/Tanggal Lahir</label>
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                              <input type="text" class="form-control" id="datepicker" placeholder="Tanggal Lahir">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                              <input type="text" class="form-control" id="alternate" readonly>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Sekolah Asal</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputMobile" placeholder="Sekolah Asal">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" id="alamat" rows="6"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6">
                          <label for="gender" class="col-form-label">Jenis Kelamin (Pilih salah satu)</label>
                            <!-- <select class="form-control" id="gender">
                              <option value="L">Laki-Laki</option>
                              <option value="P">Perempuan</option>
                            </select> -->
                          <div class="row">
                            <div class="form-check col-sm-3">
                              <label class="form-check-label">
                                <input checked type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="L">
                                Laki-laki
                              </label>
                            </div>
                            <div class="form-check col-sm-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="P">
                                Perempuan
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <label for="agama" class="col-form-label">Agama</label>
                            <select class="form-control" id="agama">
                              <option value="islam">Islam</option>
                              <option value="kristen">Kristen</option>
                              <option value="katolik">Katolik</option>
                              <option value="hindu">Hindu</option>
                              <option value="buddha">Buddha</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">Remember me</label>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
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
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?= base_url('assets/vendors/chart.js/Chart.min.js')?> "></script>
  <script src="<?= base_url('assets/vendors/jquery-bar-rating/jquery.barrating.min.js')?> "></script>
  <!-- Custom JS-->
  <script src="<?= base_url('assets/js/dashboard.js')?> "></script>
  <!-- Datepicker CDN -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="<?= base_url('assets/jquery-ui/jquery-ui.min.js')?> "></script>
  <script src="<?= base_url('js/datepicker-id.js')?>" type="text/javascript"></script>
  <script>
      $(document).ready(function(){
        $( "#datepicker" ).datepicker({
          altField: "#alternate",
          dateFormat: "yy-mm-dd",
          altFormat: "DD, d MM yy",
          changeMonth: true,
          changeYear: true,
          yearRange: "-25:+0",
          autoSize: true
          });
      })
</script>
</body>

</html>

