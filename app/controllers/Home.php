<?php
// app/controllers/Home.php

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Data Nusantara - Pusat Data Indonesia';
        
        // Data Dummy untuk Statistik
        $data['statistik'] = [
            'penduduk' => '278 Juta',
            'provinsi' => '38',
            'pulau' => '17.000+'
        ];

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}