<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Monitoring Pengadaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
          <a href="#" class="d-block"><?php echo $_SESSION['name'] ?></a>
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
	<?php include 'koneksi.php'; ?>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
				<?php
					$data = mysqli_query($koneksi, "SELECT * FROM paket");
				?>
                <h3><?php echo mysqli_num_rows($data) ?></h3>

                <p>Paket Seluruhnya</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="pengadaan2.php?info=paket" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
				<?php 
					$data = mysqli_query($koneksi, "SELECT * FROM kontrak");
				?>
                <h3><?php echo mysqli_num_rows($data) ?></h3>

                <p>Paket Sedang Berkontrak</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="pengadaan2.php?info=dikontrak" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
					$data = mysqli_query($koneksi, "SELECT * FROM pemeriksaan");
				?>
                <h3><?php echo mysqli_num_rows($data) ?></h3>
				
                <p>Paket Diperiksa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="pengadaan2.php?info=diperiksa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php 
					$data = mysqli_query($koneksi, "SELECT * FROM pembayaran");
				?>
                <h3><?php echo mysqli_num_rows($data) ?></h3>

                <p>Paket Dibayar</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="pengadaan2.php?info=dibayar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Realisasi Anggaran
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
				  <script type="text/javascript" src="js/jquery.min.js"></script>
				  <script type="text/javascript" src="js/Chart.min.js"></script>
                  <div style="position: relative; height: 300px;">
					<canvas id="graphCanvas" height="300" style="height: 300px;"></canvas>                         
                  </div>
				  <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                    var data_akun = ["532111","521111","521811","522141","523111","523121"];
                    var sum = [0,0,0,0,0,0];
					for(var i in data)
					{
						if(data[i].akun == '532111')
							sum[0] += parseInt(data[i].nilai_kontrak);
						else if(data[i].akun == '521111')
							sum[1] += parseInt(data[i].nilai_kontrak);
						else if(data[i].akun == '521811')
							sum[2] += parseInt(data[i].nilai_kontrak);
						else if(data[i].akun == '522141')
							sum[3] += parseInt(data[i].nilai_kontrak);
						else if(data[i].akun == '523111')
							sum[4] += parseInt(data[i].nilai_kontrak);
						else if(data[i].akun == '523121')
							sum[5] += parseInt(data[i].nilai_kontrak);
					}
					
					var akun = [];
					var nilai_kontrak = [];
					for(var i=0; i<6; i++)
					{
						if(sum[i]!=0)
						{
							akun.push(data_akun[i]);
							nilai_kontrak.push(sum[i]);
						}
					}

                    var chartdata = {
                        labels: akun,
                        datasets: [
                            {
                                data: nilai_kontrak,
								backgroundColor : ['#dc3545', '#00a65a', '#f39c12','#007bff', '#fd7e14', '#6f42c1']
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");
					var pieOptions = {
						legend: {
						  display: false
						},
						maintainAspectRatio : false,
						responsive : true,
					  }
                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata,
						options: pieOptions
                    });
                });
            }
        }
        </script>
                </div>
              </div><!-- /.card-body -->
            </div>
			
			<div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list"  data-widget="todo-list">
				<?php
					include 'koneksi.php';
					$data = mysqli_query($koneksi, "SELECT *, datediff(NOW(),tgl_selesai) as deadline FROM paket JOIN kontrak ON paket.no=kontrak.no LEFT JOIN pemeriksaan ON pemeriksaan.no=kontrak.no LEFT JOIN pembayaran ON pembayaran.no=pemeriksaan.no");
					while($d = mysqli_fetch_array($data))
					{
						if($d['deadline']<15 && $d['no_bapp']==NULL && $d['no_kuitansi']==NULL)
						{
							echo '<li>';
							echo '<span class="handle">';
							echo '<i class="fas fa-ellipsis-v"></i>';
							echo '<i class="fas fa-ellipsis-v"></i>';
							echo '</span>';
							echo '<div  class="icheck-primary d-inline ml-2">';
							echo '<input type="checkbox" value="">';
							echo '<label></label>';
							echo '</div>';
							echo '<span class="text">'.$d['nama_paket'].'</span>';
							echo '<small class="badge badge-danger"><i class="far fa-clock"></i> '.$d['deadline'].' hari</small>';
							echo '</li>';
						}
						else if($d['deadline']<15)
						{
							echo '<li>';
							echo '<span class="handle">';
							echo '<i class="fas fa-ellipsis-v"></i>';
							echo '<i class="fas fa-ellipsis-v"></i>';
							echo '</span>';
							echo '<div  class="icheck-primary d-inline ml-2">';
							echo '<input type="checkbox" value="" checked>';
							echo '<label></label>';
							echo '</div>';
							echo '<span class="text">'.$d['nama_paket'].'</span>';
							echo '<small class="badge badge-danger"><i class="far fa-clock"></i> '.$d['deadline'].' hari</small>';
							echo '</li>';
						}
					}
				?>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button>
              </div>
            </div>
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
			<!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  GRAFIK USER
                </h3>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
					<?php
						include 'koneksi.php';
						$user1 = mysqli_query($koneksi, "SELECT * FROM permintaan WHERE user='KPTIKBMN'");
					?>
                    <input type="text" class="knob" data-readonly="true" value="<?php echo mysqli_num_rows($user1); ?>" data-width="60" data-height="60">
                    <div class="text-white">KPTIKBMN</div>
                  </div>
                  <div class="col-4 text-center">
					<?php
						$user2 = mysqli_query($koneksi, "SELECT * FROM permintaan WHERE user='Kanwil DJBC'");
					?>
                    <input type="text" class="knob" data-readonly="true" value="<?php echo mysqli_num_rows($user2); ?>" data-width="60" data-height="60">
                    <div class="text-white">Kanwil DJBC</div>
                  </div>
                  <div class="col-4 text-center">
					<?php
						$user3 = mysqli_query($koneksi, "SELECT * FROM permintaan WHERE user='KPP P L Pakam'");
					?>
                    <input type="text" class="knob" data-readonly="true" value="<?php echo mysqli_num_rows($user3); ?>" data-width="60" data-height="60">
                    <div class="text-white">KPP P L Pakam</div>
                  </div>
				  <div class="col-4 text-center">
					<?php
						$user4 = mysqli_query($koneksi, "SELECT * FROM permintaan WHERE user='Kanwil DJPb'");
					?>
                    <input type="text" class="knob" data-readonly="true" value="<?php echo mysqli_num_rows($user4); ?>" data-width="60" data-height="60">
                    <div class="text-white">Kanwil DJPb</div>
                  </div>
				  <div class="col-4 text-center">
					<?php
						$user5 = mysqli_query($koneksi, "SELECT * FROM permintaan WHERE user='KPPN Medan 2'");
					?>
                    <input type="text" class="knob" data-readonly="true" value="<?php echo mysqli_num_rows($user5); ?>" data-width="60" data-height="60">
                    <div class="text-white">KPPN Medan 2</div>
                  </div>
				  <div class="col-4 text-center">
					<?php
						$user6 = mysqli_query($koneksi, "SELECT * FROM permintaan WHERE user='KPPN Medan 1'");
					?>
                    <input type="text" class="knob" data-readonly="true" value="<?php echo mysqli_num_rows($user6); ?>" data-width="60" data-height="60">
                    <div class="text-white">KPPN Medan 1</div>
                  </div>
				  <div class="col-4 text-center">
				  <?php
						$user7 = mysqli_query($koneksi, "SELECT * FROM permintaan WHERE user='Kanwil DJKN'");
					?>
                    <input type="text" class="knob" data-readonly="true" value="<?php echo mysqli_num_rows($user7); ?>" data-width="60" data-height="60">
                    <div class="text-white">Kanwil DJKN</div>
                  </div>
				  <div class="col-4 text-center">
				  <?php
						$user8 = mysqli_query($koneksi, "SELECT * FROM permintaan WHERE user='KPKNL'");
					?>
                    <input type="text" class="knob" data-readonly="true" value="<?php echo mysqli_num_rows($user8); ?>" data-width="60" data-height="60">
                    <div class="text-white">KPKNL</div>
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
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

<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script>
	$('.knob').knob()
</script>
</body>
</html>