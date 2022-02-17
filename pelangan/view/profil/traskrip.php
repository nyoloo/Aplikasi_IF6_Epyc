<?php
include_once("../../../function.php");
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>White Rent car</title>
    </head>

    <body style="background-color: #F7F6F2 ;">
<?php
session_start();
$db = dbconnect();
if (!isset($_SESSION["username"]))
  header("Location: ../login/login.php?error=4");
?>
<?php
if(isset($_POST["simpan2"]))
{
    $id_mobil = $_GET['id_mobil'];

    $dataMobil = query("SELECT * FROM mobil WHERE id_mobil='$id_mobil'")[0];

    $totalhargasewa = $db->escape_string($_POST["totalhargasewa"]);
    $totalhargasewa1 = filter_var($totalhargasewa, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
    $metodebayar = $db->escape_string($_POST["metodebayar"]);
    $idcustomer  = $_SESSION["id_customer"];

    $query = mysqli_query($db, "SELECT id_karyawan as idkaryawan FROM karyawan ORDER BY RAND() LIMIT 5;");
    $data = mysqli_fetch_array($query);
    $idkaryawan = $data['idkaryawan'];

    $query1 = mysqli_query($db, "SELECT max(id_destinasi) as iddestinasi from destinasi");
    $data1 = mysqli_fetch_array($query1);
    $iddestinasi = $data1['iddestinasi'];

    $query2 = mysqli_query($db, "SELECT max(id_pembayaran) as idpembayaran from pembayaran");
    $data2 = mysqli_fetch_array($query2);
    $idpembayaran = $data2['idpembayaran'];
    $idpembayaran1 = substr($idpembayaran, 1, 3);
    $tambah = (int)$idpembayaran1 + 1;
    if (strlen($tambah) == 1) {
        $idpembayaranupdate = "B00" . $tambah;
    } else if (strlen($tambah) == 2) {
        $idpembayaranupdate = "B0" . $tambah;
    } else if (strlen($tambah) >= 3) {
        $idpembayaranupdate = "B" . $tambah;
    }
    
    $sql = "INSERT INTO pembayaran (`id_pembayaran`,`id_karyawan`,`id_customer`,`id_mobil`,`id_destinasi`,`total_harga_sewa`,`metode_bayar`)
    VALUES ('$idpembayaranupdate','$idkaryawan','$idcustomer','$dataMobil[id_mobil]','$iddestinasi',$totalhargasewa1,'$metodebayar')";
    $res=$db->query($sql);
    if($res)
    {

    }   
    else
    {
        echo $db->connect_error;
    }

}
else
{
    
}
?>
<br>
<br>
<br>
<main class="container d-flex justify-content-center align-items-center">
<div class="card text-center " style="width: 45%;">
  <div class="card-header">
      Transaksi Berhasil
  </div>
  <div class="card-body">
    <h5 class="card-text">Silahkan Mengambil Mobil</h5>
    <br>
    <a href="../home.php" class="btn btn-primary">OKE</a>
  </div>

</div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
