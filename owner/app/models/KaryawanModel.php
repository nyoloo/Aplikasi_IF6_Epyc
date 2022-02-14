<?php

class KaryawanModel {
	
	private $table = 'karyawan';
	private $db;
    private $cookie;

	public function __construct()
	{
		$this->db = new Database;
        $this->cookie= $_COOKIE['id_karyawan'];
	}

	// public function getAllKaryawan()
	// {
    //     $this->db->query('SELECT * FROM ' . $this->table);
	// 	return $this->db->resultSet();
	// }
    public function getKaryawanByCookie()
	{
        $this->db->query('SELECT * FROM ' . $this->table. ' where id_karyawan='."'$this->cookie'");
		return $this->db->resultSet();
	}
    public function getKaryawanById($id)
	{
        $this->db->query('SELECT * FROM ' . $this->table. ' where id_karyawan='."'$id'");
		return $this->db->resultSet();
	}
    public function updateDataKaryawan($data)
	{
        $query = "UPDATE " . $this->table . " SET nama_karyawan=:nama_karyawan, no_telp=:no_telp,username=:username,password=:password WHERE id_karyawan=:id_karyawan";
		$this->db->query($query);

		$this->db->bind("id_karyawan", $data["id_karyawan"]);
		$this->db->bind("nama_karyawan", $data["nama_karyawan"]);
		$this->db->bind("no_telp", $data["no_telepon"]);
		$this->db->bind("username", $data["username"]);
		$this->db->bind("password", $data["password"]);
		$this->db->execute();

        return $this->db->rowCount();
	}
}