<?php

class database{
	public $localhost = "localhost:3306";
	public $user = "root";
	public $password = "";
	public $database= "db10119213penyewaanmobil";

// function dbconnect(){
// 	$db = new mysqli($localhost,$user,$password,$database);
// 	return $db;
// }

function __construct(){
	$db = new mysqli($this->localhost,$this->user,$this->password,$this->database);
	return $db;
}
}
function showpopup(){
	?>
	<div style="background-color: #faedb7;padding:10px;border:1px solid red;margin:15px 0px"> 
	<?php echo "data berhasil dibuat";?>
	</div>
	
	<?php
}

	function showError($message){
	echo $message;
	}

function getDataCustomer($username){
		$db=dbConnect();
		if($db->connect_errno==0){
			$res=$db->query("SELECT * from customer where username='$username'");
			if($res){
				if($res->num_rows>0){
					$data=$res->fetch_assoc();
					$res->free();
					return $data;
				}
				else
					return FALSE;
			}
			else
				return FALSE; 
		}
		else
			return FALSE;
	}


$conn = mysqli_connect("localhost:3306","root","","db10119213penyewaanmobil");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>