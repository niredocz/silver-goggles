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
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="shortcut icon" href="<?= base_url('assets/images/mini-nav-logo.png')?> "/>
</head>
<body>
  <div class="container-scroller">
    <!-- Start Navbar -->
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
            <a class="nav-link" href="<?= base_url('/tambah')?>">
              <i class="icon-square-plus menu-icon"></i>
              <span class="menu-title">Daftar Siswa Baru</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/edit')?>">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Tabel Data Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/report')?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Cetak Laporan</span>
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
                    <form action="/front/save" method="post">
                      <div class="form-group row">
                        <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nisn_siswa" id="nisn" placeholder="Nomor Induk Siswa Nasional" required oninvalid="this.setCustomValidity('NISN wajib diisi')" oninput="this.setCustomValidity('')">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-3 col-form-label">Nama Lengkap Siswa</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Lengkap" required oninvalid="this.setCustomValidity('Nama lengkap belum terisi')" oninput="this.setCustomValidity('')">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tempat/Tanggal Lahir</label>
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                              <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat"  required oninvalid="this.setCustomValidity('Tempat lahir belum terisi')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                              <input type="text" class="form-control" name="tanggal_lahir" id="datepicker" placeholder="Tanggal Lahir"  required oninvalid="this.setCustomValidity('Tanggal lahir belum terisi')" oninput="this.setCustomValidity('')">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Sekolah Asal</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="sekolah" id="exampleInputMobile" placeholder="Sekolah Asal"  required oninvalid="this.setCustomValidity('Asal sekolah belum terisi')" oninput="this.setCustomValidity('')">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="alamat" id="alamat" rows="6"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6">
                          <label for="gender" class="col-form-label">Jenis Kelamin (Pilih salah satu)</label>
                          <div class="row">
                            <div class="form-check col-sm-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="10001" checked>
                                Laki - laki
                              </label>
                            </div>
                            <div class="form-check col-sm-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" value="10002">
                                Perempuan
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <label for="agama" class="col-form-label">Agama</label>
                            <select class="form-control" name="agama" id="agama" required oninvalid="this.setCustomValidity('Mohon pilih salah satu pada opsi ini')" oninput="this.setCustomValidity('')">
                              <option value="" selected disabled>- Pilih salah satu -</option>
                              <?php foreach($agama as $row):?>  
                              <option value="<?= $row->id_agama;?>"><?= $row->nama_agama;?></option>
                              <?php endforeach;?>
                            </select>
                        </div>
                      </div>
                      <div class="float-right">
                        <button type="submit" class="btn btn-primary">Kirim Data</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- End of Main Content -->
        
      <!-- Footer -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Daffa Aldzakian F 2020</span>
          </div>
        </footer>
      </div>
      <!-- Footer ends -->
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
  <!-- Datepicker CDN -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="<?= base_url('assets/jquery-ui/jquery-ui.min.js')?> "></script>
  <script src="<?= base_url('js/datepicker-id.js')?>" type="text/javascript"></script>
  <script>
      $(document).ready(function(){
        $( "#datepicker" ).datepicker({
          // altField: "#alternate",
          // dateFormat: "yy-mm-dd",
          dateFormat: "dd-mm-yy",
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

