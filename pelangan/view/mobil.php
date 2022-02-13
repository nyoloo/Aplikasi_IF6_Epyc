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
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="<a class="vglnk href="https://fonts.googleapis.com/css2?family=Roboto" rel="nofollow"><span>https</span><span>://</span><span>fonts</span><span>.</span><span>googleapis</span><span>.</span><span>com</span><span>/</span><span>css2</span><span>?</span><span>family</span><span>=</span><span>Roboto</span></a>:ital@0;1&display=swap" rel="stylesheet"> 

    <title>Nama dan Harga Mobil</title>
  </head>
  
  <body style="background-color: #F7F6F2 ;">
<header class="header">

    <a href="#" class="logo">
        <img src="https://cdn.discordapp.com/attachments/837296692876410883/856111970466136114/OIP.png" alt="">
    </a>

    <nav class="navbar">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active " href="index.php"><i class="fa fa-home"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Tentang Kami</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="mobil.php">Jenis Dan Harga Mobil</a>
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
            <li><a class="dropdown-item" href="login/login.php">Login</a></li>
          </ul>
      <div class="fas fa-bars" id="menu-btn"></div>
  </header>
<br>
<br>
<section id="galeri">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h3>
          Jenis Mobil dan Harga Mobil
        </h3>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="../../asset/toyota supra.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota GT Supra</h5>
                        <p class="card-text">Harga Sewa Rp 3.000.000/hari</p>
                        <a href="#" class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="../../asset/toyota 86.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota 86</h5>
                        <p class="card-text">Harga Sewa Rp 2.560.000/hari</p>
                        <a href="#" class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="../../asset/toyota-land-cruiser-300-series.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Land Cruiser</h5>
                        <p class="card-text">Harga Sewa Rp 2.500.000/hari</p>
                        <a href="#" class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="../../asset/toyota-rush1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Rush</h5>
                        <p class="card-text">Harga Sewa Rp 2.000.000/hari</p>
                        <a href="#" class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="../../asset/new-toyota-raize-2020.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Raize</h5>
                        <p class="card-text">Harga Sewa Rp 2.000.000/hari</p>
                        <a href="#" class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/CHR Hybrid.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota CHR Hybrid</h5>
                        <p class="card-text">Harga Sewa Rp 2.500.000/hari</p>
                        <a href="#"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/agya.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Agya</h5>
                        <p class="card-text">Harga Sewa Rp 1.500.000/hari</p>
                        <a href="#"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/CHR non Hybrid.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota CHR non Hybrid</h5>
                        <p class="card-text">Harga Sewa Rp 1.800.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/camry hibrid.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Camry Hybrid</h5>
                        <p class="card-text">Harga Sewa Rp 2.500.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/camry.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Camry non Hybrid</h5>
                        <p class="card-text">Harga Sewa Rp 1.900.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/toyota yaris.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Yaris</h5>
                        <p class="card-text">Harga Sewa Rp 1.500.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/kijang inova.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Kijang Inova</h5>
                        <p class="card-text">Harga Sewa Rp 1.300.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/avanza.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Avanza</h5>
                        <p class="card-text">Harga Sewa Rp 1.500.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/Avanza-Veloz.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Avanza Veloz</h5>
                        <p class="card-text">Harga Sewa Rp 1.700.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/alpard.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Alpard</h5>
                        <p class="card-text">Harga Sewa Rp 2.600.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/corola atlis.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Corola Atlis</h5>
                        <p class="card-text">Harga Sewa Rp 1.800.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/Corolla Cross.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Corola Cross</h5>
                        <p class="card-text">Harga Sewa Rp 1.800.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/Sienta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Sienta</h5>
                        <p class="card-text">Harga Sewa Rp 1.500.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/fortuner.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota fortuner</h5>
                        <p class="card-text">Harga Sewa Rp 2.500.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/Hilux.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Hilux</h5>
                        <p class="card-text">Harga Sewa Rp 2.500.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/calya.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Calya</h5>
                        <p class="card-text">Harga Sewa Rp 1.400.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/toyota haice.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Haice</h5>
                        <p class="card-text">Harga Sewa Rp 2.000.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/vellfire-2021-colors-black.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota vellfire</h5>
                        <p class="card-text">Harga Sewa Rp 2.500.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/Vios.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Vios/h5>
                        <p class="card-text">Harga Sewa Rp 1.500.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="../../asset/voxy.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Voxy</h5>
                        <p class="card-text">Harga Sewa Rp 2.500.000/hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
    </div>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>