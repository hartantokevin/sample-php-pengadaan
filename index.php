<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengadaan Monitor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini" background="img/background.jpg">
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<script>alert('Login gagal! Username dan Password Anda salah!')</script>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<script>alert('Anda harus log-in untuk mengakses halaman tersebut')</script>";
		}
	}
	?>
	<img src="img/e-prime.png" style="width: 15%; height: 15%; display: block; margin: auto; margin-top: 50px">
	<center>
	<div class="card-body" style="width: 750px;">
	    <div class="card card-info">
	        <div class="card-header" style="background-color: #4a9bd3">
	        	<center>
	            	<h3>Monitoring Pengadaan</h3>
	            </center>
	        </div>
             <form class="form-horizontal" method="post" action="cek_login.php">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                	<center>
           			    <button type="submit" class="btn btn-info" style="background-color: #4a9bd3" value="login">Log in</button>
                  	<button type="submit" class="btn btn-default">Cancel</button>
                	</center>
                </div>
             </form>
        </div>
    </div>
	</center>
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
	<script src="dist/js/adminlte.min.js"></script>
	<script src="dist/js/demo.js"></script>
</body>
</html>
