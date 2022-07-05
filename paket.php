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
  <style>
	th, td {
		text-align:center;
	}
  </style>
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

    <!-- SEARCH FORM -->
	<script>
		function searchTable() {
			var input;
			var saring;
			var status; 
			var tbody; 
			var tr; 
			var td;
			var i; 
			var j;
			input = document.getElementById("input");
			saring = input.value.toUpperCase();
			tbody = document.getElementsByTagName("tbody")[0];;
			tr = tbody.getElementsByTagName("tr");
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td");
				for (j = 0; j < td.length-1; j++) {
					if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
						status = true;
					}
				}
				if (status) {
					tr[i].style.display = "";
					status = false;
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	</script>
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" id="input" onkeyup="searchTable()">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
	
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
    <a href="home.php" class="brand-link">
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
                <a href="paket.php" class="nav-link active">
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
                <a href="pembayaran.php" class="nav-link">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Permintaan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
	<section class="content">
      <div class="container-fluid">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title"></h3>
			</div>
			<div class="card-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>User</th>
							<th>Dasar Permintaan</th>
							<th>Keterangan</th>
							<?php
								if($_SESSION['akses'] == "admin")
									echo "<th>Opsi</th>";
							?>
						</tr>
					</thead>
					<tbody>
					<?php
						include 'koneksi.php';
						$data = mysqli_query($koneksi, "SELECT * FROM permintaan");
						while($d = mysqli_fetch_array($data))
						{
							$bool = false;
							$data2 = mysqli_query($koneksi, "SELECT * FROM paket");
							while($col = mysqli_fetch_array($data2))
								if($d['no'] == $col['no']) $bool = true;
							
							if(!$bool)
							{
								echo "<tr>";
								echo "<td class='align-middle'>".$d['no']."</td>";
								echo "<td class='align-middle'>".$d['user']."</td>";
								echo "<td class='align-middle'>".$d['dasar_permintaan']."</td>";
								echo "<td class='align-middle'>".$d['ket']."</td>";
								if($_SESSION['akses'] == "admin")
									echo "<td class='align-middle'><a href='edit_permintaan2.php?no=".$d['no']."' style='color:white'><button class='btn btn-info'><i class='fas fa-edit'></i> Edit</a></button>
									<a href='tambah_paket.php?no=".$d['no']."' style='color:white'><button class='btn btn-primary'><i class='fas fa-folder'></i> Input Paket</a></button></td>";
								echo "</tr>";
							}
						}
					?>
					</tbody>
					
				</table>
			</div>
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