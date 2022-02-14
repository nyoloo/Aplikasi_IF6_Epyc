<?php
$db = new mysqli("localhost", "root", "", "db10119213penyewaanmobil");
if ($db->connect_errno == 0) {
echo "Sukses koneksi ke database"; 
} else {
echo "Error " . $db->connect_errno . " : " .
$db->connect_error ."<br>";
}
?>