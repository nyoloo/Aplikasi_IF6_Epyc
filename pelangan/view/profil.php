<?php
	include_once("../../function.php");
?>
<?php
session_start();
$db=dbconnect();
if (!isset($_SESSION["username"]))
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

    <title>Profil</title>
  </head>
  
  <body>
    
  <header class="header">

<a href="#" class="logo">
    <img src="https://cdn.discordapp.com/attachments/837296692876410883/856111970466136114/OIP.png" alt="">
</a>

<nav class="navbar">
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active " href="home.php"><i class="fa fa-home"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">Tentang Kami</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="mobil.php">Jenis Dan Harga Mobil</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="contacts.php">Kontak</a>
        </li>
      </ul>
      
</nav>
<div class="icons">
      <a class="nav-link  fa fa-user" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../view/profil.php">profil</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#keluar">logout</a></li>
          </ul>
      <div class="fas fa-bars" id="menu-btn"></div>
</header>
  <br>
  <br>
  <br>
  <br>
  <br>
  <main class="container d-flex justify-content-center align-items-center">
    <div class="card">
      <h5 class="card-header"><center>Profil</center></h5>
        <div class="card-body">
        <center>
          <div class="row">
            <div class="col-sm-6">
              <p>Nama Customer</p>
                <h6 class="text-muted f-w-400" name="namacustomer">
                  <?php
                    $idcustomer=$_SESSION["id_customer"];
                    $query=mysqli_query($db,"select nama_customer as namacustomer from customer where id_customer='$idcustomer'");
                    $data=mysqli_fetch_array($query);
                    $namacustomer=$data['namacustomer'];
                    echo $namacustomer
                  ?>
                </h6>
            </div>
            <div class="col-sm-6">
              <p class="m-b-10 f-w-600">Alamat</p>
                  <h6 class="text-muted f-w-400" name="alamat">
                    <?php
                      $idcustomer=$_SESSION["id_customer"];
                      $query=mysqli_query($db,"select alamat as alamat from customer where id_customer='$idcustomer'");
                      $data=mysqli_fetch_array($query);
                      $alamat=$data['alamat'];
                      echo $alamat
                    ?>
                  </h6>
            </div>
            <br>
            <br>
            <br>
            <br>
              <div class="col-sm-6">
                <p class="m-b-10 f-w-600">No Telp</p>
                <h6 class="text-muted f-w-400" name="notelp">                             
                <?php
                  $idcustomer=$_SESSION["id_customer"];
                  $query=mysqli_query($db,"select no_telp as notelp from customer where id_customer='$idcustomer'");
                  $data=mysqli_fetch_array($query);
                  $notelp=$data['notelp'];
                  echo $notelp
                ?>
              </h6>
            </div>
            <div class="col-sm-6">
              <p class="m-b-10 f-w-600">Username</p>
              <h6 class="text-muted f-w-400" name="username">
              <?php
                $idcustomer=$_SESSION["id_customer"];
                $query=mysqli_query($db,"select username as username from customer where id_customer='$idcustomer'");
                $data=mysqli_fetch_array($query);
                $username=$data['username'];
                echo $username
              ?>
              </h6>
            </div>
          </div>
          <br>
          <div class="row justify-content-center">
            <div class="col-sm-6">
              <p class="m-b-10 f-w-600">Password</p>
              <h6 class="text-muted f-w-400" name="password">
              <?php
                $idcustomer=$_SESSION["id_customer"];
                $query=mysqli_query($db,"select password as password from customer where id_customer='$idcustomer'");
                $data=mysqli_fetch_array($query);
                $password=$data['password'];
                echo $password 
              ?>
              </h6>
            </div>
          </div>
        </center>
        </div>
        <div class="card-footer text-muted">
          <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-primary btn-sm" href="profil/setting_profil.php" role="button">Edit Profil</a>
          </div>
        </div>
      </div>
  </main>
  
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