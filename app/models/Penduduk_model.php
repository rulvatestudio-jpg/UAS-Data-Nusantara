<?php
// app/models/Penduduk_model.php

class Penduduk_model {
    private $table = 'penduduk';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPenduduk() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // [BARU] Hitung total data untuk Pagination
    public function countAllPenduduk() {
        $this->db->query('SELECT COUNT(*) as total FROM ' . $this->table);
        return $this->db->single()['total'];
    }

    // [BARU] Ambil data dengan batasan (LIMIT)
    public function getPendudukLimit($start, $limit) {
        $query = "SELECT * FROM " . $this->table . " LIMIT :start, :limit";
        $this->db->query($query);
        $this->db->bind('start', $start); // Jangan lupa ini harus INT
        $this->db->bind('limit', $limit);
        return $this->db->resultSet();
    }

    public function getPendudukById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPenduduk($data) {
        $query = "INSERT INTO penduduk (provinsi, ibu_kota, jumlah_penduduk, luas_wilayah)
                    VALUES
                  (:provinsi, :ibu_kota, :jumlah_penduduk, :luas_wilayah)";
        
        $this->db->query($query);
        $this->db->bind('provinsi', $data['provinsi']);
        $this->db->bind('ibu_kota', $data['ibu_kota']);
        $this->db->bind('jumlah_penduduk', $data['jumlah_penduduk']);
        $this->db->bind('luas_wilayah', $data['luas_wilayah']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPenduduk($id) {
        $query = "DELETE FROM penduduk WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function ubahDataPenduduk($data) {
        $query = "UPDATE penduduk SET
                    provinsi = :provinsi,
                    ibu_kota = :ibu_kota,
                    jumlah_penduduk = :jumlah_penduduk,
                    luas_wilayah = :luas_wilayah
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('provinsi', $data['provinsi']);
        $this->db->bind('ibu_kota', $data['ibu_kota']);
        $this->db->bind('jumlah_penduduk', $data['jumlah_penduduk']);
        $this->db->bind('luas_wilayah', $data['luas_wilayah']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataPenduduk() {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM penduduk WHERE provinsi LIKE :keyword OR ibu_kota LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}