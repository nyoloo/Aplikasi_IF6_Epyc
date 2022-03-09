<?php
	include_once("../../function.php");
?>
<!doctype html>
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
    <title>White Rent Car | Kotak</title>
  </head>
  <style>
        .modal{
            color: black;
        }
    </style>
    
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
                        <li class="nav__item"><a href="profil.php" class="nav__link">Profil</a></li>
                        <li class="nav__item"><a href="#" class="nav__link" data-bs-toggle="modal" data-bs-target="#keluar">Logout</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
  
  <br>
  <br>
  <br>
  <br>
<div class="container">
  <div class="row justify-content-center">
    <div class="card" style="max-width: 800px;">
      <div class="card-body">
        <h5 class="card-title" style="color: black;">Perlu Bantuan?</h5>
        <h6 style="color: black;">Hubungi Kami!</h6>
        <form name="kirimpesan" action="contactskirim.php" method="post">
        <label style="color: black;"for="nama" name="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" >
        <div class="mb-3">
        <label style="color: black;" for="exampleInputEmail1" class="form-label">Alamat E-mail</label>
        <input type="email" name="email" id="nama" class="form-control" >
      <div id="emailHelp" class="form-text" style="color: black;">
        Kami tidak akan pernah untuk memberi E-mail anda ke siapapun.
      </div>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"style="color: black;">Pesan</label>
  <textarea name="pesan" id="pesan" class="form-control"  rows="3"></textarea>
</div>
<input type="submit" name="simpan" value="Kirim Pesan" class="btn btn-success"></div>
              
</form>
        </div>
      </div>
  </div>
</div>
 <!-- Modal -->
 <center>
        <div class="modal fade" id="keluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" >
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
 <!--========== SCROLL UP ==========-->
 <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="../../assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="../../assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="../../assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>