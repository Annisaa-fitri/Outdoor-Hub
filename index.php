<?php
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-index">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/logo.png" alt="Logo" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="toko.php">
                            <i class="fas fa-store"></i> Toko
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">
                            <i class="fas fa-info-circle"></i> About
                        </a>
                    </li>
                    <?php if (isset($_SESSION['login'])): ?>
                        <li class="nav-item">
                            <a class="nav-link btn-logout" href="logout.php">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link btn-login" href="login.php">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>


    <div class="hero d-flex flex-column justify-content-center align-items-center">
        <!-- Text Title above the search bar -->
        <h1 class="text-center text-white mb-3">TEMUKAN TOKO ALAT SEWA CAMPING TERDEKAT</h1>
        <div class="autocomplete-container d-flex w-50">
            <i class="fa-solid fa-location-pin"></i><button class="btn btn-custom" onclick="getLocation()">Lokasi Saya Saat Ini</button>
            <!-- Search Bar -->
            <input type="text" id="search-box" class="form-control" placeholder="Masukkan Daerah Wilayah Anda" onclick="searchLocation()">

            <!-- Button Lokasi Saya -->

        </div>
        <div id="suggestions" class="autocomplete-suggestions"></div>
    </div>





    <div id="map-section">
        <div id="map"></div>
        <div id="nearest-toko"></div>
    </div>




    <div class="container mt-4">
        <h2 class="text-center">Toko Populer</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/toko/odesey.jpg" class="card-img-top" alt="Toko 1">
                    <div class="card-body">
                        <h5 class="card-title">Odessey Outdoor <span class="rating">⭐ 5.0</span></h5>
                        <p class="card-text">Harga Murah</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/toko/Alment-Rentalkemp.jpg" class="card-img-top" alt="Toko 2">
                    <div class="card-body">
                        <h5 class="card-title">Alment Camping <span class="rating">⭐ 4.9</span></h5>
                        <p class="card-text">Kualitas Terbaik</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/toko/lotse.jpg" class="card-img-top" alt="Toko 3">
                    <div class="card-body">
                        <h5 class="card-title">Lotse Outdoor <span class="rating">⭐ 4.8</span></h5>
                        <p class="card-text">Promo Menarik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <h2 class="text-center">Rekomendasi Tempat Wisata</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/wisata/wisata1.jpg" class="card-img-top" alt="Wisata 1">
                    <div class="card-body">
                        <h5 class="card-title">Rancaupas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/wisata/wisata2.jpg" class="card-img-top" alt="Wisata 2">
                    <div class="card-body">
                        <h5 class="card-title">Gunung mega</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/wisata/wisata3.jpg" class="card-img-top" alt="Wisata 3">
                    <div class="card-body">
                        <h5 class="card-title">Gunung Artapela</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="bg-dark text-white text-center p-3 mt-4">
        &copy; 2025 Outdoor Hub
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.js"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
    
</body>

</html>