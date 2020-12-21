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
      <!-- End Navbar -->
      <!-- Start Main Content -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-12 grid-margin">
              <div class="card">
                <div class="card-body" style="width: 100%;">
                  <h4 class="card-title">Tabel Data Siswa</h4>
                  <p class="card-description">Tabel informasi data siswa</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="text-center">NISN</th>
                          <th class="text-center">Nama Lengkap</th>
                          <th class="text-center">Tempat/Tanggal Lahir</th>
                          <th class="text-center">Asal Sekolah</th>
                          <th class="text-center">Alamat Tinggal</th>
                          <th class="text-center">Jenis Kelamin</th>
                          <th class="text-center">Agama</th>
                          <th colspan="2" class="text-center">Action</th>
                          <!-- <th class="text-center">Delete</th> -->
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
                          <td style="padding:5px"><a href="#" class="btn btn-info btn-sm btn-edit" data-nisn="<?= $row->nisn;?>" data-nama="<?= $row->nama;?>" data-tempat="<?= $row->tempat_lahir;?>" data-tanggal="<?= $row->tanggal_lahir;?>" data-sekolah="<?= $row->asal_sekolah;?>" data-alamat="<?= $row->alamat;?>" data-gender="<?= $row->id_gender;?>" data-agama="<?= $row->id_agama;?>">Edit</a></td>
                          <td style="padding:5px"><a href="#" class="btn btn-danger btn-sm btn-delete" data-nisn="<?= $row->nisn;?>">Hapus</a></td>
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
        <!-- Start Footer -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Daffa Aldzakian F 2020</span>
          </div>
        </footer>
        <!-- End Footer -->
      </div>
      <!-- End Main Content -->
    </div>
  </div>
  <!-- Start Edit Content -->
  <form action="/front/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editDataModal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="titleEdit">Edit Data Siswa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label>Nama Lengkap Siswa</label>
                    <input type="text" class="form-control nama_siswa" name="nama_siswa" placeholder="Nama Lengkap Siswa">
                </div>
                <div class="form-group">
                    <label>Nomor Induk Siswa Nasional</label>
                    <input type="text" class="form-control nisn_siswa" name="nisn" placeholder="NISN"  readonly>
                </div>
                <div class="form-group">
                    <label>Tempat/Tanggal Lahir</label>
                    <div class="row">
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <input type="text" class="form-control tempat_lahir" name="tempat_lahir" placeholder="Tempat">
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6">
                        <input type="text" id="datepicker" class="form-control tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" class="form-control sekolah" name="sekolah" placeholder="Asal Sekolah">
                </div>
                <div class="form-group">
                    <label>Alamat Tinggal</label>
                    <textarea class="form-control alamat" name="alamat" rows="6"></textarea>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                      <label>Jenis Kelamin</label>
                      <select name="jenis_kelamin" class="form-control jenis_kelamin">
                          <option value="">-Select-</option>
                          <?php foreach($gender as $row): ?>
                          <option value="<?= $row->id_gender?>"><?= $row->nama_gender;?></option>
                          <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="form-group col-sm-6">
                      <label>Agama</label>
                      <select name="agama" class="form-control agama">
                          <option value="">-Select-</option>
                          <?php foreach($agama as $row): ?>
                          <option value="<?= $row->id_agama?>"><?= $row->nama_agama;?></option>
                          <?php endforeach; ?>
                      </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                  <input type="hidden" name="nisn_siswa" class="nisn_siswa">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          </div>
        </div>
    </form>
    <!-- End Edit Content -->
    <!-- Start Delete Content -->
    <form action="/front/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteDataModal" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Hapus Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <h6 class="text-center">Apakah anda yakin ingin menghapus data siswa ini?</h6>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="nisn_siswa" class="nisn_siswa">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus Data</button>
                </div>
              </div>
          </div>
        </div>
    </form>
    <!-- End Delete Content -->
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
  <script src="<?= base_url('js/edit_script.js')?>"></script>
  <!-- End custom js for this page-->
</body>

</html>