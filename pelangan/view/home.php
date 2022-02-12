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
<section class="jumbotron text-center">
<img src="https://cdn.discordapp.com/attachments/837296692876410883/856111970466136114/OIP.png" alt="" width="200" class="rounded-circle">
<h1 class="display-4">White Rent Car</h1>
</section>

<section>
<div class="container">
<div class="row text-center">
<div class="col">
  <h3>Mengapa Harus Kita?</h3>
</div>
<div class="row justify-content-center">
<div class="col-4">
  <p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe dicta molestiae impedit voluptate ducimus commodi quaerat quod praesentium iste dolor.
  </p>
</div>
<div class="col-4">
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eum nisi laudantium reprehenderit est! Temporibus voluptatibus illum perspiciatis saepe voluptas?
</div>
</div>
</div>
</section>

<section id="galeri">
<div class="container">
<div class="row text-center">
  <div class="col">
    <h3>
      Galeri
    </h3>
  </div>
</div>
<div class="row">
<div class="col-md-4 mb-3">
    <div class="card" style="width: 18rem;">
      <img src="https://cdn.discordapp.com/attachments/837296692876410883/856111970466136114/OIP.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="card" style="width: 18rem;">
      <img src="https://cdn.discordapp.com/attachments/837296692876410883/856111970466136114/OIP.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="card" style="width: 18rem;">
      <img src="https://cdn.discordapp.com/attachments/837296692876410883/856111970466136114/OIP.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
  </div>
  <div class="col-md-4 mb-3">
    <div class="card" style="width: 18rem;">
      <img src="https://cdn.discordapp.com/attachments/837296692876410883/856111970466136114/OIP.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
  </div>
  <br>
  <div class="col-md-4 mb-3">
    <div class="card" style="width: 18rem;">
      <img src="https://cdn.discordapp.com/attachments/837296692876410883/856111970466136114/OIP.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
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