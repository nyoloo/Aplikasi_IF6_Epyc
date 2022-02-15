<?php

class MobilModel
{

	private $table = 'mobil';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMobil()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function tambahMobil($data)
	{
		$query1 = "SELECT max(id_mobil) as idmobil from mobil";
		$this->db->query($query1);
		$this->db->execute();
		$id = $this->db->count();


		$id1 = substr($id, 1, 3);


		$tambah = (int)$id1 + 1;
		if (strlen($tambah) == 1) {
			$mobilupdate = "M00" . $tambah;
			$data["id_mobil"] = $mobilupdate;
		} else if (strlen($tambah) == 2) {
			$mobilupdate = "M0" . $tambah;
			$data["id_mobil"] = $mobilupdate;
		} else if (strlen($tambah) >= 3) {
			$mobilupdate = "M" . $tambah;
			$data["id_mobil"] = $mobilupdate;
		}

		$gambar = $_FILES['img_url']['name'];
    	$tmp = $_FILES['img_url']['tmp_name'];
		$path = "../../asset/" . $gambar;
		move_uploaded_file($tmp, $path);
		$img_url="http://localhost/tugas-besar-RPL/asset/" . $gambar;

		$query = "INSERT INTO " . $this->table . " (`id_mobil`, `plat_mobil`, `merk_mobil`, `jenis_mobil`, `nama_mobil`,`harga_sewa`,`img_url`) 
		VALUES (:id_mobil, :plat_mobil, :merk_mobil, :jenis_mobil, :nama_mobil ,:harga_sewa, :img_url)";
		$this->db->query($query);

		$this->db->bind("id_mobil", $data["id_mobil"]);
		$this->db->bind("plat_mobil", $data["plat_mobil"]);
		$this->db->bind("merk_mobil", $data["merk_mobil"]);
		$this->db->bind("jenis_mobil", $data["jenis_mobil"]);
		$this->db->bind("nama_mobil", $data["nama_mobil"]);
		$this->db->bind("harga_sewa", $data["harga_sewa"]);
		$this->db->bind("img_url", $img_url);
		
		
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function getMobilById($id)
	{
		$this->db->query("SELECT * FROM " . $this->table . " WHERE id_mobil='" . $id . "'");
		return $this->db->resultSet();
	}

	public function updateDataMobil($data)
	{
		$gambar = $_FILES['img_url']['name'];
    	$tmp = $_FILES['img_url']['tmp_name'];
		$path = "../../asset/" . $gambar;
		move_uploaded_file($tmp, $path);
		$img_url2=$data["id_mobil"];
		$query1="Select img_url from mobil WHERE id_mobil='" . $img_url2 . "'";
		$this->db->query($query1);
		$this->db->execute();
		$img_url1=$this->db->count();
		if(!$gambar)
		{
			$img_url=$img_url1;
		}
		else
		{
			$img_url="http://localhost/tugas-besar-RPL/asset/" . $gambar;
		}

		$query = "UPDATE " . $this->table . " SET plat_mobil=:plat_mobil, merk_mobil=:merk_mobil,jenis_mobil=:jenis_mobil,nama_mobil=:nama_mobil,harga_sewa=:harga_sewa,img_url=:img_url WHERE id_mobil=:id_mobil";
		$this->db->query($query);

		$this->db->bind("id_mobil", $data["id_mobil"]);
		$this->db->bind("plat_mobil", $data["plat_mobil"]);
		$this->db->bind("merk_mobil", $data["merk_mobil"]);
		$this->db->bind("jenis_mobil", $data["jenis_mobil"]);
		$this->db->bind("nama_mobil", $data["nama_mobil"]);
		$this->db->bind("harga_sewa", $data["harga_sewa"]);
		$this->db->bind("img_url", $img_url);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusMobil($id)
	{
		$query = "DELETE FROM " . $this->table . " Where id_mobil=:id";
		$this->db->query($query);
		$this->db->bind("id", $id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariMobil()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * From " . $this->table . " Where nama_mobil like :key or merk_mobil like :key or jenis_mobil like :key");
		$this->db->bind('key', "%$key%");
		return $this->db->resultSet();
	}
}
