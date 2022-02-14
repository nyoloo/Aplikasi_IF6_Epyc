<?php

class Transaksi extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Transaksi';
        $data['transaksi'] = $this->model('TransaksiModel')->getAllTransaksi();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('transaksi/index', $data);
        $this->view('templates/footer');
    }
    public function cari()
    {
        $data['title'] = 'Data Transaksi';
        $data['transaksi'] = $this->model('TransaksiModel')->cariTransaksi();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('transaksi/index', $data);
        $this->view('templates/footer');
    }
    public function laporan()
    {
        $data['transaksi'] = $this->model('TransaksiModel')->getAllTransaksi();
        $pdf = new FPDF('p', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage('L');
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 14);
        // mencetak string 
        $pdf->Cell(190, 7, 'LAPORAN TRANSAKSI WHITE RENT CAR', 0, 1, 'R');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(15, 6, 'ID', 1);
        $pdf->Cell(50, 6, 'NAMA KARYAWAN', 1);
        $pdf->Cell(50, 6, 'NAMA CUSTOMER', 1);
        $pdf->Cell(50, 6, 'NAMA MOBIL', 1);
        $pdf->Cell(25, 6, 'PLAT MOBIL', 1);
        $pdf->Cell(25, 6, 'TUJUAN', 1);
        $pdf->Cell(27, 6, 'TOTAL HARGA', 1);
        $pdf->Cell(32, 6, 'METODE BAYAR', 1);
        $pdf->Ln();
        $pdf->SetFont('Arial', '', 10);
        foreach ($data['transaksi'] as $row) {
            $pdf->Cell(15, 6, $row['id_pembayaran'], 1);
            $pdf->Cell(50, 6, $row['nama_karyawan'], 1);
            $pdf->Cell(50, 6, $row['nama_customer'], 1);
            $pdf->Cell(50, 6, $row['nama_mobil'], 1);
            $pdf->Cell(25, 6, $row['plat_mobil'], 1);
            $pdf->Cell(25, 6, $row['tujuan'], 1);
            $pdf->Cell(27, 6, $row['total_harga_sewa'], 1);
            $pdf->Cell(32, 6, $row['metode_bayar'], 1);
            $pdf->Ln();
        }
        $pdf->Output('D', 'Laporan Transaksi White Rent Car.pdf', true);
    }
}
