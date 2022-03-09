<?php
	include_once("../../function.php");
?>
<?php
session_start();
$db=new database();
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
   <link rel="stylesheet" href="../mobil/css/styles.css">
   <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>White Rent Car | Profil</title>
  </head>

    
    <body>
  
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">White Rent Car</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="home.php" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="home.php" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="mobil.php" class="nav__link">Harga Sewa</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Profil</a></li>
                        <li class="nav__item"><a href="#" class="nav__link" data-bs-toggle="modal" data-bs-target="#logot">Logout</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
        
        <!-- Modal -->
        <center>
        <div class="modal fade" id="logot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Logout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                        Yakin Untuk Keluar?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="button" class="btn btn-primary">Ya</button>
                    </div>
                    </div>
                </div>
            </div>
        
        </center>
<br>
<br>
<br>
        <main class="container d-flex justify-content-center align-items-center">
    <div class="card">
      <h5 class="card-header" style="color: black;"><center>Profil</center></h5>
        <div class="card-body">
        <center>
          <div class="row">
            <div class="col-sm-6">
              <p  style="color: black;">Nama Customer</p>
                <h6 class="text-muted f-w-400" name="namacustomer">
                  <?php
                    $idcustomer=$_SESSION["id_customer"];
                    $query=mysqli_query($db->__construct(),"select nama_customer as namacustomer from customer where id_customer='$idcustomer'");
                    $data=mysqli_fetch_array($query);
                    $namacustomer=$data['namacustomer'];
                    echo $namacustomer
                  ?>
                </h6>
            </div>
            <div class="col-sm-6">
              <p class="m-b-10 f-w-600" style="color: black;">Alamat</p>
                  <h6 class="text-muted f-w-400" name="alamat">
                    <?php
                      $idcustomer=$_SESSION["id_customer"];
                      $query=mysqli_query($db->__construct(),"select alamat as alamat from customer where id_customer='$idcustomer'");
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
                <p class="m-b-10 f-w-600" style="color: black;">No Telp</p>
                <h6 class="text-muted f-w-400" name="notelp">                             
                <?php
                  $idcustomer=$_SESSION["id_customer"];
                  $query=mysqli_query($db->__construct(),"select no_telp as notelp from customer where id_customer='$idcustomer'");
                  $data=mysqli_fetch_array($query);
                  $notelp=$data['notelp'];
                  echo $notelp
                ?>
              </h6>
            </div>
            <div class="col-sm-6">
              <p class="m-b-10 f-w-600" style="color: black;">Username</p>
              <h6 class="text-muted f-w-400" name="username">
              <?php
                $idcustomer=$_SESSION["id_customer"];
                $query=mysqli_query($db->__construct(),"select username as username from customer where id_customer='$idcustomer'");
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
              <p class="m-b-10 f-w-600" style="color: black;">Password</p>
              <h6 class="text-muted f-w-400" name="password">
              <?php
                $idcustomer=$_SESSION["id_customer"];
                $query=mysqli_query($db->__construct(),"select password as password from customer where id_customer='$idcustomer'");
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
  

        <!--========== FOOTER ==========-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2021 Bedimcode. All rigths reserved.</p>
                </div>
            </div>
            </div>
        </footer>
        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="../mobil/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    </body>
</html>
