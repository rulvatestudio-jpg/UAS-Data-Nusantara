<?php
// app/core/Controller.php

class Controller {
    // Fungsi untuk menampilkan halaman (View)
    public function view($view, $data = []) {
        // Gunakan __DIR__ agar jalurnya pasti
        require_once __DIR__ . '/../views/' . $view . '.php';
    }

    // Fungsi untuk memanggil data (Model)
    public function model($model) {
        // Gunakan __DIR__ agar jalurnya pasti
        require_once __DIR__ . '/../models/' . $model . '.php';
        return new $model;
    }
}