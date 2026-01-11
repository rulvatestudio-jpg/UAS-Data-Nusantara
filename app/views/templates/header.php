<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Font yang lebih bersih */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        /* Style Khusus Banner Utama (Hero) */
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://source.unsplash.com/1600x900/?jakarta,city,indonesia');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 30px;
        }

        /* Efek saat mouse diarahkan ke Card */
        .hover-effect {
            transition: transform 0.3s;
        }
        .hover-effect:hover {
            transform: translateY(-5px); /* Naik sedikit */
            cursor: pointer;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?= BASEURL; ?>">
        <i class="fas fa-database me-2"></i>DATA NUSANTARA
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/penduduk">Data Provinsi</a> 
        </li>

        <?php if( isset($_SESSION['is_login']) ) : ?>
            
            <li class="nav-item ms-3 d-flex align-items-center">
                <span class="text-white me-2">Halo, <b><?= $_SESSION['username']; ?></b></span>
                <a class="btn btn-danger btn-sm rounded-pill px-3" href="<?= BASEURL; ?>/login/logout">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </a>
            </li>

        <?php else : ?>

            <li class="nav-item">
                <a class="btn btn-light text-primary ms-3 fw-bold btn-sm rounded-pill px-3" href="<?= BASEURL; ?>/login">
                    <i class="fas fa-sign-in-alt me-1"></i> Login Admin
                </a>
            </li>

        <?php endif; ?>
        </ul>
    </div>
  </div>
</nav>

<div style="margin-top: 70px;"></div>