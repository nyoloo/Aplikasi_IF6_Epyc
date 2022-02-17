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
    <link rel="stylesheet" href="pelangan/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
<br>
<br>
<br>
<br>
<section>
<div class="container">
  <div class="row text-center">
    <div class="col">
      <h3>Mengapa Harus White Rent Car?</h3>
      <span>Ada 2 Alasan kenapa harus memilih White Rent Car</span>
  </div>
  <br>
  <br>
  <br>
  <br>
  <div class="row justify-content-center">
  <div class="col-md-4 mb-3">
      <h4>
        Kendaraan yang terawat
      </h4>
      <p>
      Seluruh Unit Kendaraan NFS Rent Car mendapatkan perawatan secara berkala demi menjaga kenyamanan Anda dalam menggunakan layanan kami.
      </p>
    </div>
    <div class="col-md-4 mb-3">
      <h4>
        Harga Terjangkau
      </h4>
      <p>
      NFS Rent Car membuktikan keunggulan-keunggulan dengan harga yang terjangkau.
      </p>
    </div>
  </div>
</div>
</section>
<br>
<br>
<br>
<br>

<section class="jumbotron text-center">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h3>
          Galeri
        </h3>
      </div>
    </div>
    <center>
    <div class="row">
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
          <img src="asset/toyota supra.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
          <img src="asset/toyota 86.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
          <img src="asset/toyota-land-cruiser-300-series.jpeg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
          <img src="asset/toyota-rush1.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <br>
      <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
          <img src="asset/new-toyota-raize-2020.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
          <img src="asset/CHR Hybrid.jpg" class="card-img-top" alt="...">
        </div>
      </div>
    </div>
  </div>
    </center>
    
</section>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="pelangan/script.js"></script>
  </body>
</html>