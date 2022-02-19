<?php
	include_once("../../function.php");
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
    <link rel="stylesheet" href="../../galery.css">
    
    
    <title>White Rent Car | Home</title>
  </head>
  <body>
    
  <header class="header">

<a href="#" class="logo">
<img src="https://cdn.discordapp.com/attachments/899880655465357315/943891619692818472/Group_4.png" alt="">
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
        <a class="nav-link" href="mobil.php">Nama Dan Harga Sewa Mobil</a>
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
            <li><a class="dropdown-item" href="../view/profil.php">Profil</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#keluar">Log Out</a></li>
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
<center>
<section>
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h3>
          Galeri
        </h3>
      </div>
    </div>
    <div class="gallery" id="gallery">
        <div class="gallery-item">
            <div class="content"><img src="../../asset/toyota supra.jpg" class="card-img-top" alt="..."></div>
        </div>
        <div class="gallery-item">
            <div class="content"> <img src="../../asset/toyota 86.jpg" class="card-img-top" alt="..."></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="../../asset/toyota-land-cruiser-300-series.jpeg" class="card-img-top" alt="..."></div>
        </div>
        <div class="gallery-item">
            <div class="content"> <img src="../../asset/toyota-rush1.jpg" class="card-img-top" alt="..."></div>
        </div>
        
    </div>
  </div>
</section>
</center>
<br>
<br>
<br>
<br>
<BR>
<center>
<section>
  <div class="container">
    <div class="gallery" id="gallery">
        <div class="gallery-item">
            <div class="content"><img src="../../asset/toyota-rush1.jpg" class="card-img-top" alt="..."></div>
        </div>
        <div class="gallery-item">
            <div class="content"> <img src="../../asset/camry hibrid.jpg" class="card-img-top" alt="..."></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="../../asset/toyota haice.jpg" class="card-img-top" alt="..."></div>
        </div>
        <div class="gallery-item">
            <div class="content"> <img src="../../asset/CHR Hybrid.jpg" class="card-img-top" alt="..."></div>
        </div>
        
    </div>
  </div>
</section>
</center>
<br>
<br>
<br>
<br>
<BR>
<center>
<section>
  <div class="container">
    <div class="gallery" id="gallery">
    </div>
  </div>
</section>
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
          <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">TIDAK</button>
            <a class="btn btn-primary" href="../login/logot.php" role="button">YA</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>