<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Monitoring Pengadaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <?php 
  session_start();
  if($_SESSION['status']!="login"){
	header("location:index.php?pesan=belum_login");
  }
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
	
	<ul class="navbar-nav ml-auto">
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-power-off"></i>
        </a>
      </li>
	</ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PBJ MONITOR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Buat Paket
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="permintaan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php if($_SESSION['akses'] == "admin") echo "Input "; ?>Permintaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="paket.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php if($_SESSION['akses'] == "admin") echo "Input "; ?>Paket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kontrak.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php if($_SESSION['akses'] == "admin") echo "Input "; ?>Kontrak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pemeriksaan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php if($_SESSION['akses'] == "admin") echo "Input "; ?>Pemeriksaan</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="pembayaran.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php if($_SESSION['akses'] == "admin") echo "Input "; ?>Pembayaran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Laporan Pengadaan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pengadaan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Paket Pengadaan</p>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Pemeriksaan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
	<?php
		include 'koneksi.php';
		$data = mysqli_query($koneksi, "SELECT * FROM pemeriksaan WHERE no='".$_GET['no']."'");
		$col = mysqli_fetch_array($data);
	?>
    <section class="content">
      <div class="container-fluid">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title"></h3>
			</div>
			<form method="POST">
			<div class="card-body">
				<div class="form-group">
					<label>No</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-id-card"></i></span>
						</div>
						<label class="form-control"><?php echo $col['no']; ?></label>
						<input type="hidden" class="form-control" name="no" value="<?php echo $col['no']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Nomor BAPP</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-check"></i></span>
						</div>
						<input type="text" class="form-control" name="no_bapp" value="<?php echo $col['no_bapp']; ?>">
					</div>
				</div>
				<div>
					<button type="submit" class="btn btn-info" style="background-color: #17a2b8" name="submit">Update</button>
					<button class="btn btn-default"><a href="pembayaran.php">Batal</a></button>
                </div>
			</div>
			</form>
			<?php
				if(isset($_POST['submit']))
				{
					include 'koneksi.php';
					$no = $_POST['no'];
					$no_bapp = $_POST['no_bapp'];
					
					mysqli_query($koneksi, "UPDATE pemeriksaan SET no_bapp='$no_bapp' WHERE no='$no'");
					echo "<script>window.location = 'pemeriksaan.php';</script>";
				}
			?>
		</div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="plugins/jquery/jquery.min.js"></script>
<script src="didemo.js"></script>
<script src="dist/js/adminlte.js"></script>
</body>
</html>
