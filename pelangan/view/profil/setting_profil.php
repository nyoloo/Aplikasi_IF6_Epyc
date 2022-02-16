<?php
	include_once("../../function.php");
?>
<?php
              session_start();
              $db=dbconnect();
              if (!isset($_SESSION["username"]))
                header("Location: ../login/login.php?error=4");
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

    
    <title>Setting Profil</title>
  </head>
  <body style="background-color: #F7F6F2 ;">
  <nav class="navbar navbar-dar " style="background-color: #C8C6C6;">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://cdn.discordapp.com/attachments/837296692876410883/856111970466136114/OIP.png" alt="" width="30" height="24">
    </a>
  </div>
</nav>

<br>
<main class="container d-flex justify-content-center align-items-center">
    <div class="card " style="width: 30rem;">
        <div class="card-body">
            <form name="editprofil"  action="simpanprofil.php" method="post">
                <div class="mb-3">
                    <label for="namacustomer" class="form-label">Nama Customer</label>
                    <input type="text" name="namacustomer" id="txt_nama_customer" class="form-control"  placeholder="<?php
                                              $idcustomer=$_SESSION["id_customer"];
                                              $query=mysqli_query($db,"select nama_customer as namacustomer from customer where id_customer='$idcustomer'");
                                              $data=mysqli_fetch_array($query);
                                              $namacustomer=$data['namacustomer'];
                                              echo $namacustomer?>">
                   
                  </div>
                  <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="txt_alamat" class="form-control"  placeholder="<?php
                                              $idcustomer=$_SESSION["id_customer"];
                                              $query=mysqli_query($db,"select alamat as alamat from customer where id_customer='$idcustomer'");
                                              $data=mysqli_fetch_array($query);
                                              $alamat=$data['alamat'];
                                              echo $alamat?>">
                   
                  </div>
                <div class="mb-3">
                  <label for="notelepon" class="form-label">No Telepon</label>
                  <input type="text" name="notelp" id="txt_notelp" class="form-control" placeholder="<?php
                                              $idcustomer=$_SESSION["id_customer"];
                                              $query=mysqli_query($db,"select no_telp as notelp from customer where id_customer='$idcustomer'");
                                              $data=mysqli_fetch_array($query);
                                              $notelp=$data['notelp'];
                                              echo $notelp?>">
                  <div class="mb-3">
                    <label for="displayname" class="form-label">Username</label>
                    <input type="text" name="username" id="txt_username" class="form-control"  placeholder="<?php
                                              $idcustomer=$_SESSION["id_customer"];
                                              $query=mysqli_query($db,"select username as username from customer where id_customer='$idcustomer'");
                                              $data=mysqli_fetch_array($query);
                                              $username=$data['username'];
                                              echo $username?>">
                   
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" id="txt_password" class="form-control"  placeholder="<?php
                                              $idcustomer=$_SESSION["id_customer"];
                                              $query=mysqli_query($db,"select password as password from customer where id_customer='$idcustomer'");
                                              $data=mysqli_fetch_array($query);
                                              $password=$data['password'];
                                              echo $password ?>">
                  
                </div>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-end">
                  <a href=""></a>
                  <input type="submit" name="simpan" value="Simpan" class="btn btn-success" ></div>
              </form>
        </div>
      </div>
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