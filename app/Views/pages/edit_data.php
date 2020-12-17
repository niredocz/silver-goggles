<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=$title?></title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/mdi/css/materialdesignicons.min.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/feather/feather.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/base/vendor.bundle.base.css')?> ">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/jquery-bar-rating/fontawesome-stars-o.css')?> ">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/jquery-bar-rating/fontawesome-stars.css')?> ">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?> ">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png')?> "/>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
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
              <a class="dropdown-item preview-item">               
                  <i class="icon-head"></i> Profile
              </a>
              <a class="dropdown-item preview-item">
                  <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
        </ul> -->
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="<?= base_url('assets/images/faces/face28.png')?> ">
          </div>
          <div class="user-name">
              Edward Spencer
          </div>
          <div class="user-designation">
              Developer
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
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>NISN</th>
                          <th>Nama Lengkap</th>
                          <th>Tempat/Tanggal Lahir</th>
                          <th>Asal Sekolah</th>
                          <th>Alamat Tinggal</th>
                          <th>Jenis Kelamin</th>
                          <th>Agama</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($data_siswa as $row): ?>
                        <tr>
                          <td><?=$row->nis;?></td>
                          <td><?=$row->nama;?></td>
                          <td><?=$row->tempat_lahir;?></td>
                          <td><?=$row->tanggal_lahir;?></td>
                          <td><?=$row->asal_sekolah;?></td>
                          <td><?=$row->alamat;?></td>
                          <td><?=$row->jenis_kelamin;?></td>
                          <td><?=$row->nama_agama;?></td>
                          <td>Edit</td>
                          <!-- <td>Delete</td> -->
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                          <td>99809882010</td>
                          <td>Herman Beck</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>$ 77.99</td>
                          <td>May 15, 2015</td>
                          <td>Laki</td>
                          <td>Hindu</td>
                          <td>Edit</td>
                          <td>Delete</td>
                        </tr>
                      </tbody>
                    </table>
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

