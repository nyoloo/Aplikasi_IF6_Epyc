<?php
include_once("../../function.php");
$db=dbconnect();
if(isset($_POST["simpan"]))
{

    $notelp   = $db->escape_string($_POST["notelp"]);
    $kodetransaksi = $db->escape_string($_POST["kodetransaksi"]);
    $tglbayar = $db->escape_string($_POST["tglbayar"]);
    $deadline = $db->escape_string($_POST["deadline"]);
    $tujuan        = $db->escape_string($_POST["tujuan"]);
    $totalharga = $db->escape_string($_POST["totalharga"]);

    $nopelanggan=$_SESSION["no_pelanggan"];
    $query = mysqli_query($db, "SELECT max(kode_kue_custom) as kodekuecustom from kue_custom");
    $data = mysqli_fetch_array($query);
    $kodekuecustom = $data['kodekuecustom'];
    $tanggalpesan = date("Y-m-d");
    $statuspesanan = "Pending";
    $statuspengiriman = 0;




}
else
{
    
}
?>

</body>
</html>