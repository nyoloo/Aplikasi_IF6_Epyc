<?php

class TransaksiModel {
	
	private $table = 'pembayaran';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllTransaksi()
	{
		$this->db->query('SELECT pembayaran.id_pembayaran,pembayaran.total_harga_sewa,pembayaran.metode_bayar,karyawan.nama_karyawan,
        customer.nama_customer,mobil.nama_mobil,mobil.plat_mobil,destinasi.tujuan
        FROM pembayaran 
        INNER JOIN karyawan ON pembayaran.id_karyawan=karyawan.id_karyawan
        INNER JOIN customer ON pembayaran.id_customer=customer.id_customer
        INNER JOIN mobil ON pembayaran.id_mobil=mobil.id_mobil
        INNER JOIN destinasi ON pembayaran.id_destinasi=destinasi.id_destinasi');
		return $this->db->resultSet();
	}
    public function cariTransaksi()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT pembayaran.id_pembayaran,pembayaran.total_harga_sewa,pembayaran.metode_bayar,karyawan.nama_karyawan,
        customer.nama_customer,mobil.nama_mobil,mobil.plat_mobil,destinasi.tujuan
        FROM pembayaran 
        INNER JOIN karyawan ON pembayaran.id_karyawan=karyawan.id_karyawan
        INNER JOIN customer ON pembayaran.id_customer=customer.id_customer
        INNER JOIN mobil ON pembayaran.id_mobil=mobil.id_mobil
        INNER JOIN destinasi ON pembayaran.id_destinasi=destinasi.id_destinasi
        WHERE  karyawan.nama_karyawan LIKE :key OR customer.nama_customer LIKE :key  
        OR mobil.nama_mobil LIKE :key OR destinasi.tujuan LIKE :key OR mobil.plat_mobil LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}