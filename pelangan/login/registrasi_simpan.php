
<?php include_once("../../function.php"); ?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Registrasi</title>
</head>
<body>

<?php
if (isset($_POST["signup"])) {
$db = new database();
if ($db->__construct()->connect_errno == 0) {
	
	$email = $emailErr = "";

$nama_customer = $db->__construct()->escape_string($_POST["nama_customer"]);
$alamat = $db->__construct()->escape_string($_POST["alamat"]);
$notelp = $db->__construct()->escape_string($_POST["no_telepon"]);
$username = $db->__construct()->escape_string($_POST["username"]);
$password = $db->__construct()->escape_string($_POST["password"]);

$query=mysqli_query($db->__construct(),"SELECT max(id_customer) as idcustomer from customer");
$data=mysqli_fetch_array($query);
$no_pelanggan=$data['idcustomer'];
$no_pelanggan1 = substr($no_pelanggan, 1, 3);
$tambah=(int)$no_pelanggan1 + 1;

		if (strlen($tambah) == 1) {
			$customerupdate = "C00" . $tambah;
		} else if (strlen($tambah) == 2) {
			$customerupdate = "C0" . $tambah;
		} else if (strlen($tambah) >= 3) {
			$customerupdate = "C" . $tambah;
		}


$sql = "INSERT INTO customer (id_customer,nama_customer,alamat,no_telp,username, password)
VALUES('$customerupdate', '$nama_customer','$alamat','$notelp','$username','$password')";

$res = $db->__construct()->query($sql);
if ($res) {
if ($db->__construct()->affected_rows > 0) {
?>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<div class="card" style="width: 25rem;">
<center>
<h5 class="card-header">Registrasi Berhasil</h5>
<div class="card-body">
    <p class="card-text">Silahkan Kembali kehalaman login dengan memencet tombol OKE</p>
   
  </div>
  <div class="card-footer ">
  <a class="btn btn-primary" href="login.php" role="button">OKE</a>
  </div>
</center>
  
</div>
</center>
  <?php
}
} 
else {
?>
<p>Data gagal disimpan karena nomor mungkin sudah ada.<br></p>
<a href="javascript:history.back()"><button>Kembali</button></a>
<?php
}
} else
echo "<p> koneksi" . ( " : " . $db->__construct()->connect_error  ) . "<br></p>";
}
?>

  </center>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</body>
</html>