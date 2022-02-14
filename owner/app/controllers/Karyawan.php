<?php

class Karyawan extends Controller {
	public function index()
	{
		$data['title'] = 'Profil Karyawan';
		$data['karyawan'] = $this->model('KaryawanModel')->getKaryawanByCookie();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('karyawan/index', $data);
		$this->view('templates/footer');
	}
    public function edit($id)
    {
        $data['title'] = 'Edit Profil';
		$data['karyawan'] = $this->model('KaryawanModel')->getKaryawanById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('karyawan/edit', $data);
		$this->view('templates/footer');
    }

    public function updateKaryawan()
    {
        if ($this->model('KaryawanModel')->updateDataKaryawan($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/karyawan');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/karyawan');
            exit;
        }
    }
}