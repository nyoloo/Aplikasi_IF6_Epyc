<?php
	include_once("../../function.php");
?>
<?php
session_start();
$db=dbconnect();
if (!isset($_SESSION["email"]))
header("Location: ../login/login.php?error=4");
?>
<?php
if(isset($_POST['simpan']))
{
    $query = mysqli_query($db, "SELECT max(kode_transaksi) as kodetransaksi from transaksi");
    $data = mysqli_fetch_array($query);
    $kodetransaksi = $data['kodetransaksi'];
    $kodetransaksi1=substr($kodetransaksi,1,2);
    $tambah = (int)$kodetransaksi1 + 1;
    if (strlen($tambah) == 1){
        $kodetransaksiupdate = "00" .$tambah;
     }
     else if (strlen($tambah) == 2){
        $kodetransaksiupdate = "0" .$tambah;
     }
     else if(strlen($tambah) == 3){
        $kodetransaksiupdate = $tambah;
     }
     else if(strlen($tambah) == 4){
        $kodetransaksiupdate = $tambah;
     }

     $totalharga=$_POST["totalharga"];
    }
    else
    {
      $query = mysqli_query($db, "SELECT max(kode_transaksi) as kodetransaksi from transaksi");
      $data = mysqli_fetch_array($query);
      $kodetransaksi = $data['kodetransaksi'];
      $kodetransaksi1=substr($kodetransaksi,1,2);
      $tambah = (int)$kodetransaksi1 + 1;
      if (strlen($tambah) == 1){
          $kodetransaksiupdate = "00" .$tambah;
       }
       else if (strlen($tambah) == 2){
          $kodetransaksiupdate = "0" .$tambah;
       }
       else if(strlen($tambah) == 3){
          $kodetransaksiupdate = $tambah;
       }
       else if(strlen($tambah) == 4){
          $kodetransaksiupdate = $tambah;
       }
  
       $totalharga=$_POST["totalharga"];
    }
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
    <link rel="stylesheet" href="../../style.css">
    
    
    <title>Delichip Cake Shop</title>
  </head>
  <body>
  <header class="header">

<a href="#" class="logo">
    <img src="../../images/31-315783_kue-ulang-tahun-animasi-clipart.png" alt="">
</a>

<nav class="navbar">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link " href="../home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contacts.php">Contacs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../profil.php">Profil</a>
              </li>
          </ul>
    </nav>
    <div class="icons">
      <a href="transaksi.php" class="fa fa-shopping-cart"></a>
      <a href="../profil.php" class="fa fa-user"></a>
      <div class="fas fa-bars" id="menu-btn"></div>
  </div>
</header>
<br>
<br>
<section class="footer">

<div class="links">
    <a class="btn btn-outline-dark" href="../profil.php" role="button">Profil</a>
    <a class="btn btn-outline-dark" href="transaksi.php" role="button">transaksi</a>
    <a class="btn btn-outline-dark" href="pembayaran.php" role="button">pembayaran</a>
    <a class="btn btn-outline-dark" href="setting_profil.php" role="button">setting profil</a>
    <a class="btn btn-outline-dark" href="#" role="button" data-bs-toggle="modal" data-bs-target="#asuuu">logout</a>
</div>

</section>
<center>
    <div class="card " style="max-width: 800px;">
        <h5 class="card-header" style="text-align: center;">TERIMAKASI TELAH MEMESAN KUE DI TOKO KAMI</h5>
        <div class="card-body">
          <h5 class="card-title">Kirim Konfirmasi Pembayaran Anda dengan mengisi form dibawah ini</h5>
          <p class="card-text">FORM KONFIRMASI PEMBAYARAN</p>
          <form name="pembayaran" action="../profil/traskrip.php" method="post">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3"> 
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">No telpon</label>
              <div class="col-sm-10">
                <input type="no_telpon" class="form-control" id="inputEmail3" name="notelp">
              </div>
            </div>
            <div class="row mb-3">
              <label for="kodetransaksi" class="col-sm-2 col-form-label" >Kode transaksi</label>
              <div class="col-sm-10">
                <input type="transaksi" class="form-control" id="kodetransaksi" readonly value="<?php echo $kodetransaksiupdate ?>" name="kodetransaksi">
              </div>
            </div>
            <div class="row mb-3">
                <label for="kodetransaksi" class="col-sm-2 col-form-label">Tanggal Bayar</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tanggalbayar" value="tglbayar">
                </div>
              </div>
              <div class="row mb-3">
                <label for="kodetransaksi" class="col-sm-2 col-form-label">deadline pengiriman</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tanggaldeadline" value="deadline">
                </div>
              </div>
              <div class="row mb-3">
                <label for="kodetransaksi" class="col-sm-2 col-form-label">Totoal Harga</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="kodetransaksi" readonly value="<?php echo $totalharga ?>" name="totalharga">
                </div>
              </div>
              <div class="row mb-3">
                <label for="kodetransaksi" class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                <div class="col-sm-10">
                  <input type="totalharga" class="form-control" id="kodetransaksi" >
                </div>
              </div>
              <div class="row mb-3">
                <label for="kodetransaksi" class="col-sm-2 col-form-label">Nama Pengirim</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="kodetransaksi">
                </div>
              </div>
              <div class="row mb-3">
                <label for="kodetransaksi" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="tujuan" name="tujuan"></textarea>
                </div>
              </div>
              <input type="submit" name="simpan" value="Konfirmasi Pembayaran" class="btn btn-secondary" role="button">
          </form>
        </div>
      </div>
</center>
<<!-- Modal -->
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