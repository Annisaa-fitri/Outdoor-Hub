<?php
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Tentang Kami</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/logo.png" alt="Logo" class="navbar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="toko.php"><i class="fas fa-store"></i> Toko</a></li>
                <li class="nav-item"><a class="nav-link active" href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- About Section -->
<div class="container mt-5 text-center">
    <h2 class="mb-4">Tentang Kami</h2>
    <p class="lead">Selamat datang di Outdoor Hub, platform terbaik untuk menemukan toko penyewaan alat camping terdekat!</p>
    <p>Kami hadir untuk mempermudah para pecinta alam dalam mencari dan menyewa perlengkapan camping dengan mudah dan cepat.</p>
    <img src="assets/about-banner.jpg" alt="Tentang Kami" class="img-fluid rounded mt-3">
</div>

<!-- Team Section -->
<div class="container mt-5">
    <h3 class="text-center mb-4">Tim Kami</h3>
    <div class="row text-center">
        <div class="col-md-4">
            <img src="assets/team1.jpg" class="rounded-circle mb-2" width="150" alt="Tim 1">
            <h5>Rizky Saputra</h5>
            <p>Founder & CEO</p>
        </div>
        <div class="col-md-4">
            <img src="assets/team2.jpg" class="rounded-circle mb-2" width="150" alt="Tim 2">
            <h5>Anisa Rahma</h5>
            <p>Marketing Director</p>
        </div>
        <div class="col-md-4">
            <img src="assets/team3.jpg" class="rounded-circle mb-2" width="150" alt="Tim 3">
            <h5>Bayu Pratama</h5>
            <p>Lead Developer</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center p-3 mt-5">
    &copy; 2025 Outdoor Hub - Semua Hak Dilindungi
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
