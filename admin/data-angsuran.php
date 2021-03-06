<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Angsuran</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="data-spp.html" class="brand-link">
      <span class="brand-text font-weight-light">APP SPP & ANGSURAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block"><b>Alexander Pierce</b></a>
          <a class="d-block">Jabatan</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="home.php" class="nav-link">
                  <p>Home</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="data-user.php" class="nav-link ">
                  <p>Data User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="data-siswa.php" class="nav-link ">
                  <p>Data Siswa</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="data-spp.php" class="nav-link ">
                  <p>Data Pembayaran SPP</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="data-angsuran.php" class="nav-link active">
                  <p>Data Angsuran</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data <b>Pembayaran Angsuran Daftar Ulang</b></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Data Pembayaran Angsuran</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <form action="proses/proses_tambah.php" id="formUser">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kode Pembayaran :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" value="P001" class="form-control" id="kodebayar" name="kodebayar" disabled>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>Nis :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="number" class="form-control" id="nis" name="nis">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>Nama :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>Kelas :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="kelas" name="kelas">
                  </div>
                  <!-- /.input group -->
                  
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>Semester :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="semester" name="semester">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>

              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Status :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="status" name="status">
                  </div>
                  <!-- /.input group -->

                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>Tanggal Bayar :</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar">
                  </div>
                  <!-- /.input group -->
                  
                </div>
                <!-- /.input group -->


                <div class="form-group">
                  <label>Bulan :</label>

                  <div class="form-group">
                    <select class="custom-select form-control-border" id="bulan" name="bulan">
                      <option value="" hidden>Pilih Bulan</option>
                      <option value="Januari">Januari</option>
                      <option value="Februari">Februari</option>
                      <option value="Maret">Maret</option>
                      <option value="April">April</option>
                      <option value="Mei">Mei</option>
                      <option value="Juni">Juni</option>
                      <option value="Juli">Juli</option>
                      <option value="Agustus">Agustus</option>
                      <option value="September">Septemer</option>
                      <option value="Oktober">Oktober</option>
                      <option value="November">November</option>
                      <option value="Desember">Desember</option>
                    </select>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->


                <div class="form-group">
                  <label>Tahun :</label>

                  <div class="form-group">
                    <select class="custom-select form-control-border" id="tahun" name="tahun">
                      <option value="" hidden>Pilih Tahun</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2023</option>
                      <option value="2025">2025</option>
                      <option value="2026">2026</option>
                      <option value="2027">2027</option>
                      <option value="2028">2028</option>
                      <option value="2029">2029</option>
                      <option value="2030">2030</option>
                      <option value="2031">2031</option>
                      <option value="2032">2032</option>
                      <option value="2033">2033</option>
                      <option value="2034">2034</option>
                      <option value="2035">2035</option>
                      <option value="2036">2036</option>
                    </select>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <button type="submit" class="btn btn-block btn-outline-primary">Tambah Data Pembayaran</button>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </form>
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 style="text-align: center; padding: 10px 0;"><b>Seluruh Data Angsuran</b></h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th style="width: 2%;">No.</th>
                    <th>KODE PEMBAYARAN</th>
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>KELAS</th>
                    <th>SEMESTER</th>
                    <th>STATUS ANGSURAN</th>
                    <th>TANGGAL BAYAR</th>
                    <th>BULAN</th>
                    <th>TAHUN</th>
                    <th>STATUS BAYAR</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <tr>
                    <td>1.</td>
                    <td>P001</td>
                    <td>001</td>
                    <td>Wahyu Pratama</td>
                    <td>1.A</td>
                    <td>Semester 1</td>
                    <td>Proses / Selesai</td>
                    <td>12 Agustus 2020</td>
                    <td>Agustus</td>
                    <td>2022</td>
                    <td>LUNAS</td>
                    <td style="width: 10%;">
                      <a href="#" class="btn btn-outline-primary btn-sm">Edit</a> 
                      <a href="#" class="btn btn-outline-danger btn-sm">Hapus</a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.1.0
    </div>
    <strong>Copyright &copy; 2022  All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<!-- jquery-validation -->
<script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../plugins/jquery-validation/additional-methods.min.js"></script>

<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });

  $(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#formUser').validate({
    rules: {
      nis: {
        required: true,
        minlength: 7,
        maxlength: 7,
      },
      nama: {
        required: true,
      },
      kelas: {
        required: true,
      },
      semester: {
        required: true,
      },
      status: {
        required: true,
      },
      tgl_bayar: {
        required: true,
      },
      bulan: {
        required: true,
      },
      tahun: {
        required: true,
      },
    },
    messages: {
      nis: {
        required: "Mohon diisi nama nya!",
        minlength: "Minimal 7 angka",
        maxlength: "Maksimal 7 angka",
      },
      nama: {
        required: "Mohon diisi nama nya!",
      },
      kelas: {
        required: "Mohon dipilih kelas nya!",
      },
      semester: {
        required: "Mohon dipilih semester nya!",
      },
      status: {
        required: "Mohon dipilih status nya!",
      },
      tgl_bayar: {
        required: "Mohon diisi tanggal bayar nya!",
      },
      bulan: {
        required: "Mohon dipilih bulan nya!",
      },
      tahun: {
        required: "Mohon dipilih tahun nya!",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
