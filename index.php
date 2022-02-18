<?php
    include_once("function.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <title>White Rent Car</title>
  </head>
  <body>
<header class="header">

    <a href="#" class="logo">
        <img src="https://cdn.discordapp.com/attachments/899880655465357315/943891619692818472/Group_4.png" alt="">
    </a>

    <nav class="navbar">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active " href="index.php"><i class="fa fa-home"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pelangan/about.php">Tentang Kami</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pelangan/mobil.php">Jenis Dan Harga Mobil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"data-bs-toggle="modal" data-bs-target="#modal" href="#">Kontak</a>
            </li>
          </ul>
          
    </nav>
    <div class="icons">
      <a class="nav-link  fa fa-user" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="pelangan/login/login.php">Login</a></li>
          </ul>
      <div class="fas fa-bars" id="menu-btn"></div>
  </header>
<br>
<br>
<section class="jumbotron text-center">
<img src="https://cdn.discordapp.com/attachments/899880655465357315/943892486760325150/Group_5.png" alt="" width="200" class="rounded-circle">
<h1 class="display-4">White Rent Car</h1>
</section>
<section class="about" id="about">

    
    <div class="row">
        <div class="image">
            <img src="https://cdn.discordapp.com/attachments/899880655465357315/943892486760325150/Group_5.png" alt="">
        </div>
        <div class="content">
            <h3>Mengapa Harus Kami?</h3>
            <p>Seluruh unit kendaraan White Rent Car mendapatkan perawatan secara berkala demi menjaga kenyamanan Anda dalam menggunakan layanan kami.</p>
            <p> White Rent Car membuktikan keunggulan-keunggulan dengan harga yang terjangkau.</p>
        </div>
    </div>

</section>

<br>
<br>
<br>
<br>

<div class="container">
<div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
  <div class="col-12 col-md-6 col-lg-3">
    
<img src="https://cdn.discordapp.com/attachments/837296692876410883/944055349093224589/ansh-jain-u7rqYZyjtwg-unsplash.jpg" data-target="#indicators" data-slide-to="0" alt="" /> 
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="asset/toyota 86.jpg" data-target="#indicators" data-slide-to="1" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
     <img src="asset/toyota-land-cruiser-300-series.jpeg" data-target="#indicators" data-slide-to="2"  alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="asset/toyota-rush1.jpg" data-target="#indicators" data-slide-to="3" alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="asset/new-toyota-raize-2020.jpg" data-target="#indicators" data-slide-to="3"  alt="" />
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="asset/CHR Hybrid.jpg" data-target="#indicators" data-slide-to="4" alt="" />
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div id="indicators" class="carousel slide" data-interval="false">
  <ol class="carousel-indicators">
    <li data-target="#indicators" data-slide-to="0" class="active"></li>
    <li data-target="#indicators" data-slide-to="1"></li>
    <li data-target="#indicators" data-slide-to="2"></li>
    <li data-target="#indicators" data-slide-to="3"></li>
    <li data-target="#indicators" data-slide-to="4"></li>
    <li data-target="#indicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      
      <img class="d-block w-100" src="https://cdn.discordapp.com/attachments/837296692876410883/944055349093224589/ansh-jain-u7rqYZyjtwg-unsplash.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/toyota 86.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/toyota-land-cruiser-300-series.jpeg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/toyota-rush1.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/new-toyota-raize-2020.jpg" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/CHR Hybrid.jpg" alt="Sixth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
  </div>
</div>
</div>

<!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                Login terlebihdahulu sebelum memasuki halaman ini, bisa klik icon <i class="fa fa-user"></i> atau klik tombol login
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a href="pelangan/login/login.php" class="btn btn-primary">Login</a>
                </div>
              </div>
            </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="pelangan/script.js"></script>
  </body>
</html>