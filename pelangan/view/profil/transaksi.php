<?php
include_once("../../function.php");
?>
<<<<<<< HEAD <?php
              session_start();
              if (!isset($_SESSION["email"]))
                header("Location: ../login/login.php?error=4");
              ?> <?php
                  $db = dbconnect();
                  ?>=======>>>>>>> dfff2950da8a8d93eea982df33bbd15ba0cf6390
  <?php
  $cart;
  function kodeInCart($kodekue)
  {
    $incart = $_POST["kodekue"];
    return ($kodekue == $incart);
  };
  if (isset($_COOKIE["cart"])) {
    $cart = json_decode($_COOKIE["cart"], true);
    if (isset($_POST["input"])) {
      $kodekue = $_POST["kodekue"];
      $namakue = $_POST["namakue"];
      $harga = $_POST["harga"];
      array_push($cart['cart'], array(
        "kode_kue" => "$kodekue",
        "nama_kue" => "$namakue",
        "harga" => "$harga",
        "jumlah" => 1
      ));
      // $cart['cart'] = array_filter($cart['cart'], function ($kodekue) {
      //   $incart = $_POST["kodekue"];
      //   return ((int)$kodekue['kode_kue'] != (int)$incart);
      // });

      // if (in_array($kodekue, $cart['cart'], true) === true) {
      //   $kodekue = $_POST["kodekue"];
      //   $namakue = $_POST["namakue"];
      //   $harga = $_POST["harga"];
      //   array_push($cart['cart'], array(
      //     "kode_kue" => "$kodekue",
      //     "nama_kue" => "$namakue",
      //     "harga" => "$harga",
      //     "jumlah" => 1
      //   ));
      // }
      $cart['cart'] = array_unique($cart['cart'], SORT_REGULAR);
      // foreach ($cart['cart'] as $kera => $value) {
      //   if ($cart['cart'][$kera] == $kodekue) {
      //     $cart['cart'][$kera] = (int)$cart['cart'][$kera] +  1;
      //   }
      // }
      $hasilcart = json_encode($cart);
      setcookie("cart", $hasilcart);
    }
  } else if (isset($_POST["input"])) {
    $kodekue = $_POST["kodekue"];
    $namakue = $_POST["namakue"];
    $harga = $_POST["harga"];
    $cart = array();
    $cart['no_pelanggan'] = $_SESSION["no_pelanggan"];
    $cart['cart'] = array();

    array_push($cart['cart'], array(
      "kode_kue" => "$kodekue",
      "nama_kue" => "$namakue",
      "harga" => "$harga",
      "jumlah" => 1
    ));
    $hasilcart = json_encode($cart);
    setcookie("cart", $hasilcart);
  } else {
    $cart = array();
    $cart['cart'] = array();
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>Delichip Cake Store</title>
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
        <a class="btn btn-outline-dark" href="#" role="button" data-bs-toggle="modal" data-bs-target="#keluar">logout</a>
      </div>

    </section>
    <main class="container d-flex justify-content-center align-items-center">
      <div class="card " style="max-width: 790px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../../images/unknown (4).png" class="img-fluid rounded-start" alt="...">
          </div>
          <?php
          if (isset($_POST["simpan"])) {
            if ($db->connect_errno == 0) {
              // bersihkan data

              $basic_cake   = $db->escape_string($_POST["basic_cake"]);
              $ukuran         = $db->escape_string($_POST["ukuran_kue"]);
              $wording = $db->escape_string($_POST["wording"]);
              $lilin = $db->escape_string($_POST["Lilin"]);
              $garnish         = $db->escape_string($_POST["garnish"]);
              $bentuk = $db->escape_string($_POST["Bentuk"]);
              $ket_tambahan = $db->escape_string($_POST["keterangan_tambahan"]);


              $query = mysqli_query($db, "SELECT max(kode_kue_custom) as kodekuecustom from kue_custom");
              $data = mysqli_fetch_array($query);
              $kodekuecustom = $data['kodekuecustom'];
              $tambah = (int)$kodekuecustom + 1;
              $tambah1 = strval($tambah);

              $hargaukuran = 0;
              $harga = 0;
              if ($ukuran == "18") {
                $hargaukuran = 30000;
                $harga = 95000 + $hargaukuran;
              } else if ($ukuran == "22") {
                $hargaukuran = 40000;
                $harga = 95000 + $hargaukuran;
              } else if ($ukuran == "24") {
                $hargaukuran = 50000;
                $harga = 95000 + $hargaukuran;
              }

              $no_pelanggan = $_SESSION["no_pelanggan"];

              $sql = "insert into kue_custom(kode_kue_custom,no_pelanggan,basic_cake,ukuran,wording,lilin,garnish,bentuk,ket_tambahan,harga) values
        ('$tambah1','$no_pelanggan','$basic_cake','$ukuran','$wording','$lilin','$garnish','$bentuk','$ket_tambahan','$harga') ";

              $res = $db->query($sql);
              $sql1 = "SELECT kode_kue_custom,harga from kue_custom where no_pelanggan='$no_pelanggan' AND kode_kue_custom='$tambah1'";
              $res1 = $db->query($sql1);
              $data = $res1->fetch_row();
              do {
                list($kodekuecustom, $harga) = $data;
          ?>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="row g-3 align-items-center">
                      <h5 class="card-title">Kue Custom <?php echo $kodekuecustom; ?></h5>
                      <div class="col-auto">
                        <label for="IputtItems" class="col-form-label">Items</label>
                      </div>
                      <div class="col-auto">
                        <input type="items" id="inputitems" class="form-control" value="1" aria-label="1" readonly>
                      </div>
                      <div class="col-auto">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                          <button type="button" class="btn btn-primary"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $harga; ?>">
                        </div>
                      </div> -->
                      <div class="card border-0" style="width: 100%;">
                          <div class="card-body" style="width: 50%;">
                            <h5 class="card-title" id="namakue-<?php echo $kodekuecustom; ?>">Kue Custom <?php echo $kodekuecustom; ?></h5>
                            <div class="d-flex justify-content-start align-items-center ">
                              <label for="IputtItems" class="col-form-label me-3">Items</label>
                              <input type="items" id="inputitems-<?php echo $kodekuecustom; ?>" class="form-control me-3" value="1" aria-label="1" readonly>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-primary" id="plusBtn-<?php echo $kodekuecustom; ?>"><i class="fa fa-plus"></i></button>
                                <button class="btn btn-primary" id="minusBtn-<?php echo $kodekuecustom; ?>"><i class="fa fa-minus"></i></button>
                              </div>
                            </div>
                            <div class="d-flex flex-row">
                              <label for="IputtItems" class="col-form-label me-3">Harga</label>
                              <input type="text" readonly class="form-control-plaintext" id="harga-<?php echo $kodekuecustom; ?>" name="hargacustom" value="<?php echo $harga;; ?>">
                            </div>
                          </div>
                        </div>
                    <?php
                  } while ($data = $res1->fetch_row());
                } else {
                  echo "database error";
                }
              } else {
                if ($_SESSION["no_pelanggan"]) {

                  $no_pelanggan = $_SESSION["no_pelanggan"];
                  $query = mysqli_query($db, "SELECT max(kode_kue_custom) as kodekuecustom from kue_custom");
                  $data = mysqli_fetch_array($query);
                  $kodekuecustom = $data['kodekuecustom'];
                  $sql1 = "SELECT kode_kue_custom,harga from kue_custom where no_pelanggan='$no_pelanggan' AND kode_kue_custom='$kodekuecustom'";
                  $res1 = $db->query($sql1);
                  $data = $res1->fetch_row();
                  if ($res1->num_rows==1)
                  {
                    do {
                      list($kodekuecustom, $harga) = $data;
                      ?>
                        <div class="col-md-8"> 
                          <div class="card-body">
                            <div class="row g-3 align-items-center">
                              <h5 class="card-title">Kue Custom <?php echo $kodekuecustom; ?></h5>
                              <div class="col-auto">
                                <label for="IputtItems" class="col-form-label">Items</label>
                              </div>
                              <div class="col-auto">
                                <input type="items" id="inputitems" class="form-control" value="1" aria-label="1" readonly>
                              </div>
                              <div class="col-auto">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                  <button type="button" class="btn btn-primary"><i class="fa fa-minus"></i></button>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $harga; ?>">
                                </div>
                              </div> -->
                              <div class="card border-0" style="width: 100%;">
                            <div class="card-body" style="width: 50%;">
                              <h5 class="card-title" id="namakue-<?php echo $kodekuecustom; ?>">Kue Custom <?php echo $kodekuecustom; ?></h5>
                              <div class="d-flex justify-content-start align-items-center ">
                                <label for="IputtItems" class="col-form-label me-3">Items</label>
                                <input type="items" id="inputitems-<?php echo $kodekuecustom; ?>" class="form-control me-3" value="1" aria-label="1" readonly>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <button class="btn btn-primary" id="plusBtn-<?php echo $kodekuecustom; ?>"><i class="fa fa-plus"></i></button>
                                  <button class="btn btn-primary" id="minusBtn-<?php echo $kodekuecustom; ?>"><i class="fa fa-minus"></i></button>
                                </div>
                              </div>
                              <div class="d-flex flex-row">
                                <label for="IputtItems" class="col-form-label me-3">Harga</label>
                                <input type="text" readonly class="form-control-plaintext" id="harga-<?php echo $kodekuecustom; ?>" name="hargacustom" value="<?php echo $harga;; ?>">
                              </div>
                            </div>
                          </div>
                          <script>
                                $(document).ready(function() {
                                  let n = 1;
                                  let harga = parseInt($("#harga-<?php echo $kodekuecustom; ?>").val());
                                  $("#plusBtn-<?php echo $kodekuecustom; ?>").on('click', (function() {
                                    n += 1
                                    let hargaBaru = harga * n;
                                    let hargString = hargaBaru.toString();
                                    $("#inputitems-<?php echo $kodekuecustom; ?>").val(n);
                                    $("#harga-<?php echo $kodekuecustom; ?>").val(hargString);
                                    $("#totalharga").val()
                                  }));
  
                                  $("#minusBtn-<?php echo $kodekuecustom; ?>").on('click', (function() {
                                    if (n >= 2) {
                                      let hargabaru = parseInt($("#harga-<?php echo $kodekuecustom; ?>").val());
                                      let hargaMinus = hargabaru-harga;
                                    n -= 1;
                                    let hargStringMinus = hargaMinus.toString();
                                      $("#inputitems-<?php echo $kodekuecustom; ?>").val(n);
                                      $("#harga-<?php echo $kodekuecustom; ?>").val(hargStringMinus);
                                    } else {
                                      //Otherwise do nothing
                                    }
                                  }));
                                });
                              </script>
                    <?php
                    } while ($data = $res1->fetch_row());
                  }
                  else{
                    ?>
                    <div class="card border-0" style="width: 100%;">
                    <div class="card-body" style="width: 50%;">
                      <h5 class="card-title" id="namakue-<?php echo $kodekuecustom; ?>">Kue Custom</h5>
                      <div class="d-flex justify-content-start align-items-center ">
                        <label for="IputtItems" class="col-form-label me-3">Items</label>
                        <input type="items" id="inputitems-<?php echo $kodekuecustom; ?>" class="form-control me-3" value="1" aria-label="1" readonly>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button class="btn btn-primary" id="plusBtn-<?php echo $kodekuecustom; ?>"><i class="fa fa-plus"></i></button>
                          <button class="btn btn-primary" id="minusBtn-<?php echo $kodekuecustom; ?>"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="d-flex flex-row">
                        <label for="IputtItems" class="col-form-label me-3">Harga</label>
                        <input type="text" readonly class="form-control-plaintext" id="harga-<?php echo $kodekuecustom; ?>" value="">
                      </div>
                    </div>
                  </div>
                  <?php
                  }
                  ?>
                <?php
                } else {
                  echo "anda tidak memesan kue custom";
                }
              }
                  ?>
                  <?php
                  foreach ($cart['cart'] as $keranjang) {
                  ?>
                    <div class="col-md-8">
                          <div class="card-body">
                            <div class="row g-3 align-items-center">
                              <h5 class="card-title"><?php echo $keranjang["nama_kue"]; ?></h5>
                              <div class="col-auto">
                                <label for="IputtItems" class="col-form-label">Items</label>
                              </div>
                              <div class="col-auto">
                                <input type="items" id="inputitems" class="form-control" value="1" aria-label="1" readonly>
                              </div>
                              <div class="col-auto">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                  <button type="button" class="btn btn-primary"><i class="fa fa-minus"></i></button>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $keranjang["harga"]; ?>">
                                </div>
                              </div> -->
                    <div class="card border-0" style="width: 100%;">
                      <div class="card-body" style="width: 50%;">
                        <h5 class="card-title" id="namakue-<?php echo $keranjang["nama_kue"]; ?>"><?php echo $keranjang["nama_kue"]; ?></h5>
                        <div class="d-flex justify-content-start align-items-center ">
                          <label for="IputtItems" class="col-form-label me-3">Items</label>
                          <input type="items" id="inputitems-<?php echo $keranjang['kode_kue']; ?>" class="form-control me-3" value="<?php echo $keranjang['jumlah']; ?>" aria-label="1">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button class="btn btn-primary" id="plusBtn-<?php echo $keranjang['kode_kue']; ?>"><i class="fa fa-plus"></i></button>
                            <button class="btn btn-primary" id="minusBtn-<?php echo $keranjang['kode_kue']; ?>"><i class="fa fa-minus"></i></button>

                          </div>
                        </div>
                        <div class="d-flex flex-row">
                          <label for="IputtItems" class="col-form-label me-3">Harga</label>
                          <input type="text" readonly class="form-control-plaintext" id="harga-<?php echo $keranjang['kode_kue']; ?>" name="hargakue" value="<?php echo $keranjang["harga"]; ?>">

                        </div>
                      </div>
                    </div>
                    <script>
                              $(document).ready(function() {
                                let n = 1;
                                let harga = parseInt($("#harga-<?php echo $keranjang['kode_kue']; ?>").val());
                                $("#plusBtn-<?php echo $keranjang['kode_kue']; ?>").on('click', (function() {
                                  n += 1
                                  let hargaBaru = harga * n;
                                  let hargString = hargaBaru.toString();
                                  $("#inputitems-<?php echo $keranjang['kode_kue']; ?>").val(n);
                                  $("#harga-<?php echo $keranjang['kode_kue']; ?>").val(hargString);
                                  $("#totalharga").val()
                                }));

                                $("#minusBtn-<?php echo $keranjang['kode_kue']; ?>").on('click', (function() {
                                  console.log(n)
                                  console.log(harga)
                                  if (n >= 2) {
                                    let hargabaru = parseInt($("#harga-<?php echo $keranjang['kode_kue']; ?>").val());
                                    let hargaMinus = hargabaru-harga;
                                  n -= 1;
                                  let hargStringMinus = hargaMinus.toString();
                                    $("#inputitems-<?php echo $keranjang['kode_kue']; ?>").val(n);
                                    $("#harga-<?php echo $keranjang['kode_kue']; ?>").val(hargStringMinus);
                                  } else {
                                    //Otherwise do nothing
                                  }
                                }));
                              });
                            </script>
                  <?php
                  }
                  ?>
                  <center>
                    <form class="row g-3 justify-content-center" name="transaksi" action="../profil/pembayaran.php" method="post">

                      <div class="mb-3 row ">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Total Harga</label>
                        <div class="col-auto">
                          <input type="text" readonly class="form-control-plaintext" id="totalharga" value="
                          <?php ?>">
                        </div>
                        <div class="col-auto">
                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="">
                        </div>
                        <div class="col-auto">
                        <input type="submit" name="simpan" value="Lanjutkan Pembayaran" class="btn btn-secondary" role="button">
                        </div>
                      </div>


                    </form>
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
                </main>



                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                  <script src="script.js"></script>
                  <script>
                              $(document).ready(function() {
                                let n = 1;
                                let harga = parseInt($("#harga-<?php echo $kodekuecustom; ?>").val());
                                $("#plusBtn-<?php echo $kodekuecustom; ?>").on('click', (function() {
                                  n += 1
                                  let hargaBaru = harga * n;
                                  let hargString = hargaBaru.toString();
                                  $("#inputitems-<?php echo $kodekuecustom; ?>").val(n);
                                  $("#harga-<?php echo $kodekuecustom; ?>").val(hargString);
                                  $("#totalharga").val()
                                }));

                                $("#minusBtn-<?php echo $kodekuecustom; ?>").on('click', (function() {
                                  if (n >= 2) {
                                    let hargabaru = parseInt($("#harga-<?php echo $kodekuecustom; ?>").val());
                                    let hargaMinus = hargabaru-harga;
                                  n -= 1;
                                  let hargStringMinus = hargaMinus.toString();
                                    $("#inputitems-<?php echo $kodekuecustom; ?>").val(n);
                                    $("#harga-<?php echo $kodekuecustom; ?>").val(hargStringMinus);
                                  } else {
                                    //Otherwise do nothing
                                  }
                                }));
                              });
                            </script>

  </body>

  </html>