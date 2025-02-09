<?php
require_once 'koneksi.php';

// Ambil data toko dari database
$sql = "SELECT * FROM toko";
$result = $conn->query($sql);
$tokoList = [];

while ($row = $result->fetch_assoc()) {
    $tokoList[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Toko Outdoor</title>
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
                <li class="nav-item"><a class="nav-link active" href="toko.php"><i class="fas fa-store"></i> Toko</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Container -->
<div class="container mt-4">
    <h2 class="text-center mb-4">Daftar Toko Outdoor</h2>

    <!-- Filter & Search -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <select id="filter" class="form-select form-select-sm">
                <option value="">Filter</option>
                <option value="terdekat">Jarak Terdekat</option>
                <option value="terjauh">Jarak Terjauh</option>
                <option value="ratingTertinggi">Rating Tertinggi</option>
                <option value="ratingTerendah">Rating Terendah</option>
            </select>
        </div>
        <div class="position-relative">
            <input type="text" id="search" class="form-control" placeholder="Cari toko...">
            <div id="search-results" class="list-group position-absolute w-100"></div>
        </div>
    </div>

    <!-- List Toko -->
    <div class="row" id="toko-container">
        <?php foreach ($tokoList as $toko): ?>
            <?php
            $namaFile = strtolower(str_replace(' ', '-', $toko['nama'])) . '.jpg';
            $pathGambar = "assets/toko/" . $namaFile;
            if (!file_exists($pathGambar)) {
                $pathGambar = "assets/toko/default.jpg";
            }
            ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100"> 
                    <img src="<?= $pathGambar; ?>" class="card-img-top" alt="<?= $toko['nama']; ?>">
                    <div class="card-body d-flex flex-column"> 
                        <h5 class="card-title d-flex justify-content-between">
                            <span><?= $toko['nama']; ?></span>
                            <span class="text-warning rating">⭐ <?= $toko['rating']; ?></span>
                        </h5>
                        <p class="card-text text-muted"><i class="fas fa-map-marker-alt"></i> <?= $toko['alamat']; ?></p>
                        <p class="card-text text-end text-muted mt-auto"><i class="fas fa-route"></i> 
                        <span class="jarak" data-lat="<?= $toko['lat']; ?>" data-lon="<?= $toko['lon']; ?>">- km</span>
                    </p>
                    <a href="detail_toko.php?id_toko=<?= $toko['id']; ?>" class="btn btn-sm btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center p-3 mt-4">
    &copy; 2025 Outdoor Hub
</footer>

<script>
    document.getElementById("filter").addEventListener("change", function () {
    const filterValue = this.value;
    const tokoContainer = document.getElementById("toko-container");
    const tokoCards = Array.from(tokoContainer.getElementsByClassName("col-md-4"));

    if (filterValue === "terdekat" || filterValue === "terjauh") {
        tokoCards.sort((a, b) => {
            const jarakA = parseFloat(a.querySelector(".jarak").textContent);
            const jarakB = parseFloat(b.querySelector(".jarak").textContent);
            return filterValue === "terdekat" ? jarakA - jarakB : jarakB - jarakA;
        });
    } else if (filterValue === "ratingTertinggi" || filterValue === "ratingTerendah") {
        tokoCards.sort((a, b) => {
            const ratingA = parseFloat(a.querySelector(".rating").textContent.replace("⭐", "").trim());
            const ratingB = parseFloat(b.querySelector(".rating").textContent.replace("⭐", "").trim());
            return filterValue === "ratingTertinggi" ? ratingB - ratingA : ratingA - ratingB;
        });
    }

    // Hapus elemen lama dan tambahkan yang telah disortir
    tokoContainer.innerHTML = "";
    tokoCards.forEach(card => tokoContainer.appendChild(card));
});
document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search");
    const tokoContainer = document.getElementById("toko-container");
    const tokoCards = tokoContainer.getElementsByClassName("col-md-4");

    searchInput.addEventListener("input", function () {
        const query = searchInput.value.toLowerCase();

        Array.from(tokoCards).forEach(function (card) {
            const namaToko = card.querySelector(".card-title span").textContent.toLowerCase();
            if (namaToko.includes(query)) {
                card.style.display = "block"; // Tampilkan jika cocok
            } else {
                card.style.display = "none"; // Sembunyikan jika tidak cocok
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function (position) {
                const userLat = position.coords.latitude;
                const userLon = position.coords.longitude;

                // Hitung dan tampilkan jarak toko
                document.querySelectorAll(".jarak").forEach(function (el) {
                    const tokoLat = parseFloat(el.getAttribute("data-lat"));
                    const tokoLon = parseFloat(el.getAttribute("data-lon"));

                    if (!isNaN(tokoLat) && !isNaN(tokoLon)) {
                        el.textContent = haversineDistance(userLat, userLon, tokoLat, tokoLon).toFixed(1) + " km";
                    } else {
                        el.textContent = "- km"; // Jika koordinat tidak valid
                    }
                });
            },
            
            function (error) {
                console.warn("Gagal mendapatkan lokasi: " + error.message);
                document.querySelectorAll(".jarak").forEach(el => el.textContent = "Lokasi tidak ditemukan");
            }
        );
    } else {
        console.warn("Geolocation tidak didukung oleh browser ini.");
        document.querySelectorAll(".jarak").forEach(el => el.textContent = "Lokasi tidak didukung");
    }

    function haversineDistance(lat1, lon1, lat2, lon2) {
        const R = 6371; // Radius bumi dalam km
        const dLat = (lat2 - lat1) * (Math.PI / 180);
        const dLon = (lon2 - lon1) * (Math.PI / 180);
        const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                  Math.cos(lat1 * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180)) * 
                  Math.sin(dLon / 2) * Math.sin(dLon / 2);
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        return R * c; // Jarak dalam kilometer
    }
});

</script>

</body>
</html>
