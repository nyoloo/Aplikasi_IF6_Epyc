<?php include_once("../../function.php"); ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>White Rent Car | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/mobil.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
					<form name="regisform" action="registrasi_simpan.php" method="post">
                    <div class="form-group">
                    <input type="text" name="nama_customer" id="nama_customer" class="form-control" placeholder="Masukkan Nama Anda"required>
		      		</div>
                      <div class="form-group">
                      <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Anda"required>
		      		</div>
                      <div class="form-group">
                      <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="Masukkan No Telepon Anda"required>
		      		</div>
		      		<div class="form-group">
                      <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username Anda"required>
		      		</div>
	            <div class="form-group">
					<input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda"required >
	              
	            </div>
	            <div class="form-group">
                    <input type="submit" name="signup" id="signup"  class="form-control btn btn-primary submit px-3" value="Register" >
	            </div>
	          </form>
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

