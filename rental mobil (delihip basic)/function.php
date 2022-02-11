<?php

function dbconnect(){
	$db = new mysqli("localhost:3306","root","","delichip");
	return $db;
}
function showpopup(){
	?>
	<div style="background-color: #faedb7;padding:10px;border:1px solid red;margin:15px 0px"> 
	<?php echo "data berhasil dibuat";?>
	</div>
	
	<?php
}
function getkuekustom(){
		$db = dbconnect(); 
		if($db->connect_errno == 0){
			$res=$db->query("select * from kue_custom order by kode_kue_custom");
			if($res){
				$data = $res->fetch_all(MYSQLI_ASSOC);
				$res->free();
				return $data;
			}else
				return False;
		}else
			return false;
	}
	function showError($message){
	echo $message;
	}

function getDataPelanggan($Email){
		$db=dbConnect();
		if($db->connect_errno==0){
			$res=$db->query("SELECT * from pelanggan where email='$Email'");
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

function getPassword($password){
		$db=dbConnect();
		if($db->connect_errno==0){
			$res=$db->query("SELECT * from pelanggan where password='$password'");
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
?>