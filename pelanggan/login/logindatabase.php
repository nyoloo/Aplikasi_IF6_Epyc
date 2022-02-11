<?php include_once ("../function.php");

$db = dbconnect();
if ($db->connect_errno == 0) {
	if (isset($_POST["signin"])) {
		$email = $db->escape_string($_POST["email"]);
		$your_pass = $db->escape_string($_POST["your_pass"]);
		$sql = "SELECT email,no_pelanggan,nama_pelanggan,password FROM pelanggan WHERE email='$email' and password='$your_pass'";
		$res = $db->query($sql);
		if ($res) {
			if ($res->num_rows == 1) {
				$data = $res->fetch_assoc();
			session_start();
				$_SESSION["email"] = $data["email"];
				$_SESSION["no_pelanggan"] = $data["no_pelanggan"];
				$_SESSION["nama_pelanggan"] = $data["nama_pelanggan"];
				$_SESSION["password"] = $data["password"];

			header("Location: ../view/home.php");
			} else
				header("Location: login.php?error=1");
		}
	} 
	else
		header("Location: login.php?error=2");
	} 
else
	header("Location: login.php?error=3");

?>
