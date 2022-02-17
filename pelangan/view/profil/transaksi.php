<?php
include_once("../../../function.php");

$id_mobil = $_GET['id_mobil'];

$dataMobil = query("SELECT * FROM mobil WHERE id_mobil='$id_mobil'")[0];
error_reporting (0);


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
    
    
    <title>White Rent Car</title>
  </head>
  <Style>
    .container-sm{
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </Style>
  <body style="background-color: #F7F6F2 ;">
  <header class="header">

<a href="#" class="logo">
<img src="https://cdn.discordapp.com/attachments/899880655465357315/943891619692818472/Group_4.png" alt="">
</a>

<nav class="navbar">
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active " href="../home.php"><i class="fa fa-home"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../about.php">Tentang Kami</a>
        </li>
        <li class="nav-item">
        <a class="nav-link"  href="../mobil.php">Jenis Dan Harga Mobil</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../contacts.php">Kontak</a>
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
<br>
<main class="container d-flex justify-content-center align-items-center">

<form class="row g-3" name="pembayaran" action="pembayaran.php?id_mobil=<?= $dataMobil['id_mobil']; ?>" method="post">
<div class="card " style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-12">
        <div class="card-body">
          <div class="row g-3 align-items-center">
            <h5 class="card-title"><?= $dataMobil['nama_mobil']?></h5>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Minjam</label>
              <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggalminjam" value="<?= $_POST['tanggalminjam']; ?>">
                  </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Kembali</label>
              <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggalkembali" value="<?= $_POST['tanggalkembali']; ?>">
                  </div>
            </div>

            <div class="mb-3 row">
              <label for="platnomor" class="col-sm-2 col-form-label">Plat Nomer</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="platnomor" name ="platnomor" value=" <?= $dataMobil['plat_mobil']; ?>">

              </div>
              <br>
              <br>
              <br>
            <div class="mb-3 row">
            <label for="hargasewa" class="col-sm-2 col-form-label">Harga Sewa Per Hari</label>
              <div class="col-auto">
                <input type="text" readonly class="form-control" id="hargasewa" style="width: 28rem;" value=" <?= "Rp".number_format($dataMobil['harga_sewa'],0,",","."); ?>" > 
              </div>
              <div class="col-auto">
              <button class="btn btn-primary " name="cekharga" id="cekharga" href="" onclick="document.pembayaran.action = ''; 
                document.pembayaran.method='post'; document.pembayaran.submit(); 
                return true;">Cek Harga</button>
                
                <?php
                $diff2 = 0;
                  if(isset($_POST['cekharga'])) {
                      $tanggalminjam    =strtotime($_POST['tanggalminjam']);
                      $tanggalkembali   =strtotime($_POST['tanggalkembali']);
                      $diff             =(($tanggalkembali - $tanggalminjam)/3600)/24;
                      if ($diff  * $dataMobil['harga_sewa'] < 0) {
                        $diff2 = 0;
                      } else {
                        $diff2 = $diff  * $dataMobil['harga_sewa'];
                      };
                  }
                ?>
              </div>
            </div>
            </div>
            <div class="mb-3 row">
              <label for="totalhargasewa" class="col-sm-2 col-form-label"> Total Harga Sewa </label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="totalhargasewa" name="totalhargasewa" value="<?= "Rp".number_format($diff2,0,",","."); ?>">
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="../mobil.php" class="btn btn-danger">Kembali</a>
            <input type="submit" name="simpan1" value="Lanjutkan Ke Pembayaran" class="btn btn-primary">
            </div>
          </div>
  </div>
</div>
      </div>
    </div>
</div>

</form>
</main>
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