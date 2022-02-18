<?php include_once("../../function.php"); ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>White Rent Car | Login</title>
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
					<h2 class="heading-section">Login </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
				  <?php
                    if (isset($_GET["error"])) {
                    $error = $_GET["error"];
                    if ($error == 1) {
                    showError("Email dan password tidak sesuai."); }
                    else if ($error == 2)
                    showError("Error database. Silahkan hubungi administrator");
                    else if ($error == 3)
                    showError("Koneksi ke Database gagal. Autentikasi gagal.");
                    else if ($error == 4)
                    showError("Anda tidak boleh mengakses halaman sebelumnya karena belum login.
                    Silahkan login terlebih dahulu.");
                    else
                    showError("Unknown Error.");
                    }
                    ?>
					<form action="logindatabase.php" method="post">
		      		<div class="form-group">
						<input type="username" name="username" id="username" class="form-control" placeholder="Username"required>
		      		</div>
	            <div class="form-group">
					<input type="password" name="password" id="password" class="form-control" placeholder="Password"required >

	            </div>
	            <div class="form-group">
					<input type="submit" name="signin" id="signin" class="form-control btn btn-primary submit px-3" value="Login" >
	            </div>
	            <div class="form-group d-md-flex">
								<div class="justify-content-end">
									<a href="lupapass.php" class="term-service">lupa Password?</a>
								</div>
	            </div>
	          </form>
	          <div class="social d-flex text-center">
	          	<a href="register.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Buat Akun</a>
	          	<a href="http://localhost/tugas-besar-RPL/admin/public/" class="px-2 py-2 ml-md-1 rounded term-service"><span class="ion-logo-twitter mr-2"></span> Login Sebagai Admin</a>
	          </div>
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

