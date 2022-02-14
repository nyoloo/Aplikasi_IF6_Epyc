<?php

class Mobil extends Controller {
	public function index()
	{
		$data['title'] = 'Data Mobil';
		$data['mobil'] = $this->model('MobilModel')->getAllMobil();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('mobil/index', $data);
		$this->view('templates/footer');
	}

	public function tambah() 
	{
		$data['title'] = 'Tambah Mobil';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('mobil/tambah', $data);
        $this->view('templates/footer');
	}

	public function simpanMobil()
    {
        if ($this->model('MobilModel')->tambahMobil($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/mobil');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/mobil');
            exit;
        }
    }

    public function edit($id) 
	{
		$data['title'] = 'Edit Mobil';
        $data['mobil'] = $this->model('MobilModel')->getMobilById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('mobil/edit', $data);
        $this->view('templates/footer');
	}

    public function updateMobil()
    {
        if ($this->model('MobilModel')->updateDataMobil($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diubah', 'success');
            header('location: ' . base_url . '/mobil');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diubah', 'danger');
            header('location: ' . base_url . '/mobil');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('MobilModel')->hapusMobil($id) > 0) {
            Flasher::setMessage('Berhasil', 'hapus', 'success');
            header('location: ' . base_url . '/mobil');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'hapus', 'danger');
            header('location: ' . base_url . '/mobil');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Data Mobil';
        $data['mobil'] = $this->model('MobilModel')->cariMobil();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('mobil/index', $data);
        $this->view('templates/footer');
    }
}