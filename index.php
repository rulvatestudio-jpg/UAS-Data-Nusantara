<?php
// index.php

// Jika belum ada session, mulai session baru (Penting buat Login nanti)
if( !session_id() ) session_start();

// Panggil file init yang akan memuat semua komponen
require_once 'app/init.php';

// Jalankan Class App (Router utama)
$app = new App;