<?php
// app/controllers/Penduduk.php

class Penduduk extends Controller {
    
    // Halaman Utama dengan Pagination
    public function index() {
        $data['judul'] = 'Data Kependudukan';
        
        // --- LOGIKA PAGINATION ---
        $jumlahDataPerHalaman = 3; // Mau tampilkan berapa baris?
        $jumlahData = $this->model('Penduduk_model')->countAllPenduduk();
        $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
        
        // Cek sedang di halaman berapa (ambil dari URL ?page=...)
        $halamanAktif = (isset($_GET['page'])) ? $_GET['page'] : 1;
        
        // Hitung start data (awalData)
        // Halaman 1 -> mulai 0. Halaman 2 -> mulai 3. Halaman 3 -> mulai 6.
        $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
        
        // Ambil data yang sudah dipotong (LIMIT)
        $data['penduduk'] = $this->model('Penduduk_model')->getPendudukLimit($awalData, $jumlahDataPerHalaman);
        
        // Kirim info halaman ke View biar bisa bikin tombol Next/Prev
        $data['halamanAktif'] = $halamanAktif;
        $data['jumlahHalaman'] = $jumlahHalaman;
        // -------------------------

        $this->view('templates/header', $data);
        $this->view('penduduk/index', $data);
        $this->view('templates/footer');
    }

    // Fungsi Tambah (Khusus Admin)
    public function tambah() {
        if( !isset($_SESSION['role']) || $_SESSION['role'] != 'admin' ) {
            header('Location: ' . BASEURL . '/penduduk'); exit;
        }
        $data['judul'] = 'Tambah Data Provinsi';
        $this->view('templates/header', $data);
        $this->view('penduduk/tambah', $data);
        $this->view('templates/footer');
    }

    public function simpan() {
        if( !isset($_SESSION['role']) || $_SESSION['role'] != 'admin' ) {
            header('Location: ' . BASEURL . '/penduduk'); exit;
        }
        if( $this->model('Penduduk_model')->tambahDataPenduduk($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/penduduk'); exit;
        } else {
            header('Location: ' . BASEURL . '/penduduk'); exit;
        }
    }

    public function hapus($id) {
        if( !isset($_SESSION['role']) || $_SESSION['role'] != 'admin' ) {
            header('Location: ' . BASEURL . '/penduduk'); exit;
        }
        if( $this->model('Penduduk_model')->hapusDataPenduduk($id) > 0 ) {
            header('Location: ' . BASEURL . '/penduduk'); exit;
        } else {
            header('Location: ' . BASEURL . '/penduduk'); exit;
        }
    }

    public function edit($id) {
        if( !isset($_SESSION['role']) || $_SESSION['role'] != 'admin' ) {
            header('Location: ' . BASEURL . '/penduduk'); exit;
        }
        $data['judul'] = 'Edit Data Provinsi';
        $data['pdd'] = $this->model('Penduduk_model')->getPendudukById($id);
        $this->view('templates/header', $data);
        $this->view('penduduk/ubah', $data);
        $this->view('templates/footer');
    }

    public function ubah() {
        if( !isset($_SESSION['role']) || $_SESSION['role'] != 'admin' ) {
            header('Location: ' . BASEURL . '/penduduk'); exit;
        }
        if( $this->model('Penduduk_model')->ubahDataPenduduk($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/penduduk'); exit;
        } else {
            header('Location: ' . BASEURL . '/penduduk'); exit;
        }
    }

    public function cari() {
        $data['judul'] = 'Daftar Penduduk';
        $data['penduduk'] = $this->model('Penduduk_model')->cariDataPenduduk();
        
        // Saat mencari, pagination kita matikan dulu (tampilkan semua hasil)
        $data['halamanAktif'] = 1; 
        $data['jumlahHalaman'] = 1;

        $this->view('templates/header', $data);
        $this->view('penduduk/index', $data);
        $this->view('templates/footer');
    }
}