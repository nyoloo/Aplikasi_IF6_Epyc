<?php
    include_once("../../function.php");
    $halaman = 6; //batasan halaman
    $db=new database();
	  $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
	  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
	  $total = $db->__construct()->query("select * from mobil");
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
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="<a class="vglnk href="https://fonts.googleapis.com/css2?family=Roboto" rel="nofollow"><span>https</span><span>://</span><span>fonts</span><span>.</span><span>googleapis</span><span>.</span><span>com</span><span>/</span><span>css2</span><span>?</span><span>family</span><span>=</span><span>Roboto</span></a>:ital@0;1&display=swap" rel="stylesheet"> 

    <title>Nama dan Harga Mobil</title>
  </head>
  
  <body style="background-color: #F7F6F2 ;">
  <header class="header">

<a href="#" class="logo">
    <img src="https://cdn.discordapp.com/attachments/899880655465357315/943887196681822278/Frame_1_2.png" alt="">
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
                        <a href="profil/transaksi.php?id_mobil=<?= $data['id_mobil']; ?>" class="btn btn-primary">Sewa Sekarang</a>
                    </div>
            </div>
        </div>
       <?php endforeach; ?> 
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
      <!-- //sadasdasdasd -->
    </div>
  </div>
</section>
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