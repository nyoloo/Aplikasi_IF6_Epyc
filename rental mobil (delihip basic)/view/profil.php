<?php
	include_once("../function.php");
?>
<?php
session_start();
$db=dbconnect();
if (!isset($_SESSION["email"]))
header("Location:../login/login.php?error=4");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
    
    
    <title>Delichip Cake Store</title>
  </head>
  <body>
    
<header class="header">

    <a href="#" class="logo">
        <img src="../images/31-315783_kue-ulang-tahun-animasi-clipart.png" alt="">
    </a>
    <nav class="navbar">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link " href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacts.php">Contacs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profil.php">Profil</a>
              </li>
          </ul>
    </nav>
    <div class="icons">
      <a href="profil/transaksi.php" class="fa fa-shopping-cart"></a>
      <a href="profil.php" class="fa fa-user"></a>
      <div class="fas fa-bars" id="menu-btn"></div>
  </div>
  </header>
  <br>
  <br>
  <section class="footer">
 
    <div class="links">
        <a class="btn btn-outline-dark" href="profil.php" role="button">Profil</a>
        <a class="btn btn-outline-dark" href="profil/transaksi.php" role="button">transaksi</a>
        <a class="btn btn-outline-dark" href="profil/pembayaran.php" role="button">pembayaran</a>
        <a class="btn btn-outline-dark" href="profil/setting_profil.php" role="button">setting profil</a>
        <a class="btn btn-outline-dark" href="#" role="button" data-bs-toggle="modal" data-bs-target="#keluar">logout</a>
    </div>

</section>

<center>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Profil</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Username</p>
                                            <h6 class="text-muted f-w-400" name="namapelanggan">
                                              <?php
                                              $nopelanggan=$_SESSION["no_pelanggan"];
                                              $query=mysqli_query($db,"select nama_pelanggan as namapelanggan from pelanggan where no_pelanggan='$nopelanggan'");
                                              $data=mysqli_fetch_array($query);
                                              $namapelanggan=$data['namapelanggan'];
                                              echo $namapelanggan?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-muted f-w-400" name="email"><?php
                                              $nopelanggan=$_SESSION["no_pelanggan"];
                                              $query=mysqli_query($db,"select email as email from pelanggan where no_pelanggan='$nopelanggan'");
                                              $data=mysqli_fetch_array($query);
                                              $email=$data['email'];
                                              echo $email ?></h6>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-end">
                                        <a class="btn btn-primary btn-sm" href="profil/setting_profil.php" role="button">Edit Profil</a>
                                      </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </center>
  
<!-- Modal -->
<div class="modal fade" id="keluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <center>
        <h3>Anda yakin ?</h3>
        </center>
        
      </div>
      <div class="modal-footer">
        <div class="modal-body">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">TIDAK</button>
        <a class="btn btn-primary" href="../login/logot.php" role="button">YA</a>
        </div>
        
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>