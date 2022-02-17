<?php
    include_once("../function.php");
    $halaman = 6; //batasan halaman
    $db=dbconnect();
	  $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
	  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
	  $total = $db->query("select * from mobil");
	  $pages = ceil($total->num_rows/$halaman);
    $dataMobil = query("SELECT * FROM mobil limit $mulai,$halaman");

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
              <a class="nav-link active " href="../index.php"><i class="fa fa-home"></i></a>
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
        <?php foreach($dataMobil as $data) :?>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
            <img src="<?= $data['img_url']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['nama_mobil'];?></h5>
                        <p class="card-text">Harga Sewa Rp<?=number_format($data['harga_sewa'],0,",",".") ?>/Hari</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal"class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
       <?php endforeach; ?> 
       
       <center>
       <div class="d-grid gap-2 d-md-flex justify-content-md-cebter">
            <div class="pagination:container">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="First group">
            <?php for ($i=1; $i<=$pages ; $i++){ ?>
                <a class="btn btn-primary"  href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php } 
                ?>
    
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
                Login terlebihdahulu sebelum anda memesan, anda harus login terlebih dahulu dengan meneka icon <i class="fa fa-user"></i> atau klik tombol login
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a href="login/login.php" class="btn btn-primary">Login</a>
                </div>
              </div>
            </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>