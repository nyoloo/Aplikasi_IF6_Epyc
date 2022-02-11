<?php
	include_once("../function.php");
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
    
    
    <title>Delichip Cake Shop</title>
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
  <section class="home" id="home">
  
  <div class="content">
      <h3>Welcome</h3>
      <p>Selamat datang di Delichip Cake Store, Delichip menjual bebeberapa jenis kue seperti bolu, Kue ulang tahun dan Kue coustem </p>
  </div>
  <div class="image">
      <img src="../images/31-315783_kue-ulang-tahun-animasi-clipart.png" alt="img">
  </div>
</section>
<section class="products" id="products">


  <h1 class="heading"> BEST <span>SELLER</span> </h1>

  <div class="box-container">

      <div class="box">
          <div class="image">
              <img src="../kue/Marble Coklat - Copy.jpeg" alt="">
          </div>
          <div class="content">
              <h3>Marble Coklat</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="price">Rp 60.000,00</div>
              <div class="d-grid gap-2">
              <a class="btn btn-primary" href="product/mcoklat.php" role="button">Details Produk</a>
              <a class="btn btn-primary" href="profil/transaksi.php" role="button">add to chart</a>
</div>
          </div>
      </div>

      <div class="box">
          <div class="image">
              <img src="../kue/Bolu Ketam Hitam Polos - Copy.jpeg" alt="">
          </div>
          <div class="content">
              
              <h3>Bolu Ketan Hitam Polos</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="price">Rp 65.000,00</div>
              <div class="d-grid gap-2">
              <a class="btn btn-primary" href="product/bkhp.php" role="button">Details Produk</a>
              <a class="btn btn-primary" href="profil/transaksi.php" role="button">add to chart</a>
              </div>
          </div>
      </div>

      <div class="box">
          <div class="image">
              <img src="../kue/Brownies Keju Gondrong - Copy.jpeg" alt="">
          </div>
          <div class="content">
              <h3>Brownies Keju</h3>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="price">Rp 70.000,00</div>
              <div class="d-grid gap-2">
              <a class="btn btn-primary" href="product/bk.php" role="button">Details Produk</a>
              <a class="btn btn-primary" href="profil/transaksi.php" role="button">add to chart</a>
              </div>
          </div>
      </div>

  </div>

</section>
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