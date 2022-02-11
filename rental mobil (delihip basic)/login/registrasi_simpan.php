<?php
include_once("../function.php");
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
<title>Registrasi</title>
</head>
<body>

<?php
if (isset($_POST["signup"])) {
$db = dbconnect();
if ($db->connect_errno == 0) {
	
	$email = $emailErr = "";

$nama_pelanggan = $db->escape_string($_POST["nama_pelanggan"]);
$email = $db->escape_string($_POST["email"]);
$password = $db->escape_string($_POST["password"]);

$query=mysqli_query($db,"SELECT max(no_pelanggan) as nopel from pelanggan");
$data=mysqli_fetch_array($query);
$no_pelanggan=$data['nopel'];
$tambah=(int)$no_pelanggan + 1;


$sql = "INSERT INTO pelanggan (no_pelanggan, nama_pelanggan,email, password)
VALUES('$tambah', '$nama_pelanggan','$email','$password')";

$res = $db->query($sql);
if ($res) {
if ($db->affected_rows > 0) {
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
echo "<p> koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br></p>";
}
?>

  </center>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</body>
</html>