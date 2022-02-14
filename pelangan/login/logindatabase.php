<?php include_once ("../function.php");

$db = dbconnect();
if ($db->connect_errno == 0) {
	if (isset($_POST["signin"])) {
		$username = $db->escape_string($_POST["username"]);
		$password = $db->escape_string($_POST["password"]);
		$sql = "SELECT * FROM customer WHERE username='$username' and password='$password'";
		$res = $db->query($sql);
		if ($res) {
			if ($res->num_rows == 1) {
				$data = $res->fetch_assoc();
			session_start();
				$_SESSION["id_customer"] = $data["id_customer"];
				$_SESSION["nama_customer"] = $data["nama_customer"];
				$_SESSION["alamat"] = $data["alamat"];
				$_SESSION["no_telp"] = $data["no_telp"];
				$_SESSION["username"] = $data["username"];
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
