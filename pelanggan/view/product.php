<?php
	include_once("../function.php");
?>
<?php
session_start();
if (!isset($_SESSION["email"]))
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
    
    
    <title>Delichip Cake Store</title>
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
  <section class="footer">
    <div class="links">
        <a class="btn btn-outline-dark" href="product.php" role="button">All produk</a>
        <a class="btn btn-outline-dark" href="product/CoustemCake.php " role="button">Coustem  Cake</a>
    </div>

</section>
<section class="products" id="products">

    <h1 class="heading"> all <span>product</span> </h1>

    <div class="box-container">
    <?php
    $db = dbconnect();
    $sql = "select * from kue";
    $res = $db->query($sql);

    if ($res) {
      // $data = $res->fetch_array(MYSQLI_ASSOC);
      $data=$res->fetch_row();
      do {
        list($kodekue,$namakue,$harga,$imgurl) =$data;
        ?>
        <div class="box">
        <img src="<?php echo $imgurl; ?>" alt="<?php echo $namakue; ?>" style="max-width: 20rem;
                            max-height: 20rem;
                            float: left;
                            width: 100px;
                            height: 100px;
                            object-fit: cover;" >
        <h5><?php echo $namakue; ?></h5>
        <div class="price">Rp. <?php echo $harga; ?></div>
        <a class="btn btn-primary btn-sm" href="product/produkkue.php?kodekue=<?php echo $kodekue ?>" role="button">Product Details</a>
    </div>
    <?php
      } while($data=$res->fetch_row());
      // $kodekue = $data['kode_kue'];
      // $namakue = $data['nama_kue'];
      // $harga = $data['harga'];
      // $imgurl = $data['img_url'];

    } else {
      echo "database error";
    }

      ?>
        <!-- <div class="box">
            <img src="../kue/Bolu Karamel Sarang Semut - Copy.jpeg" alt="">
            <h3>Bolu Karamel Sarang Semut</h3>
            <div class="price">Rp 40.000</div>
            <a class="btn btn-primary btn-sm" href="product/bkss.php" role="button">Product Details</a>
        </div>

        <div class="box">
            <img src="../kue/Bolu Ketam Hitam Polos - Copy.jpeg" alt="">
            <h3>Bolu Ketam Hitam Polos</h3>
            <div class="price">Rp 50.000 </div>
            <a class="btn btn-primary btn-sm" href="product/bkhp.php" role="button">Product Details</a>
        </div>

        <div class="box">
            <img src="../kue/Bolu Ketan Hitam Gondrong - Copy.jpeg" alt="">
            <h3>Bolu Ketan Hitam Gondrong</h3>
            <div class="price">Rp 60.0000</div>
            <a class="btn btn-primary btn-sm" href="product/bkhg.php" role="button">Product Details</a>
        </div>

        <div class="box">
            <img src="../kue/Bolu Pisang Polos 2 - Copy.jpeg" alt="">
            <h3>Bolu Pisang Polos</h3>
            <div class="price">Rp 45.000</div>
            <a class="btn btn-primary btn-sm" href="product/bpp.php" role="button">Product Details</a>
        </div>

        <div class="box">
            <img src="../kue/Brownies Keju Gondrong - Copy.jpeg" alt="">
            <h3>Brownies Keju</h3>
            <div class="price">Rp 70.000</div>
            <a class="btn btn-primary btn-sm" href="product/bk.php" role="button">Product Details</a>
        </div>

        <div class="box">
            <img src="../kue/Marbel Ceres - Copy.jpeg" alt="">
            <h3>marbel ceres</h3>
            <div class="price">Rp 65.000</div>
            <a class="btn btn-primary btn-sm" href="product/mc.php" role="button">Product Details</a>
        </div>
        <div class="box">
            <img src="../kue/Marble Coklat - Copy.jpeg" alt="">
            <h3>marbel Coklat</h3>
            <div class="price">Rp 60.000</div>
            <a class="btn btn-primary btn-sm" href="product/mcoklat.php" role="button">Product Details</a>
        </div>
        <div class="box">
            <img src="../kue/Marble Keju Gondrong - Copy.jpeg" alt="">
            <h3>marbel keju Gondrong</h3>
            <div class="price">Rp 70.000</div>
            <a class="btn btn-primary btn-sm" href="product/mkg.php" role="button">Product Details</a>
        </div>
        <div class="box">
            <img src="../kue/Red Velvet Keju Gondrong (1).jpeg" alt="">
            <h3>Red Valvet</h3>
            <div class="price">Rp 70.000</div>
            <a class="btn btn-primary btn-sm" href="product/rv.php" role="button">Product Details</a>
        </div> -->

    </div>
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