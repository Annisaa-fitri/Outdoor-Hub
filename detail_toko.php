<?php
require_once 'koneksi.php';

function tampilkanBintang($rating)
{
    $bintangPenuh = floor($rating);
    $desimal = $rating - $bintangPenuh;
    $bintangSetengah = 0;

    if ($desimal >= 0.29  && $desimal <= 0.8) {
        $bintangSetengah = 1;
    } elseif ($desimal > 0.8) {
        $bintangPenuh++;
    }

    $bintangKosong = 5 - ($bintangPenuh + $bintangSetengah);
    $output = '';

    for ($i = 0; $i < $bintangPenuh; $i++) {
        $output .= '<span class="fa fa-star checked"></span>';
    }
    if ($bintangSetengah) {
        $output .= '<span class="fa fa-star-half-alt checked"></span>';
    }
    for ($i = 0; $i < $bintangKosong; $i++) {
        $output .= '<span class="fa fa-star"></span>';
    }

    return $output;
}

// Ambil ID toko dari URL
$id = isset($_GET['id_toko']) ? intval($_GET['id_toko']) : 0;
$sql = "SELECT * FROM toko WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$toko = $result->fetch_assoc();
$stmt->close();
$conn->close();

// Cek apakah data toko ditemukan
if (!$toko) {
    die("Toko tidak ditemukan.");
}

// Konversi nama toko jadi format nama file (huruf kecil & tanpa spasi)
$namaFile = strtolower(str_replace(' ', '-', $toko['nama'])) . '.jpg';
$pathGambar = "assets/toko/" . $namaFile;

// Cek apakah file gambar toko ada, kalau tidak gunakan default
if (!file_exists($pathGambar)) {
    $pathGambar = "assets/toko/default.jpg";
}

?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <title>Detail Toko</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
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

    <div class="container mt-5">
        <a href="index.php" class="btn btn-outline-warning mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>

        <?php if ($toko): ?>
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img src="<?php echo $pathGambar; ?>" class="img-fluid rounded shadow" alt="Gambar Toko">
                </div>
                <div class="col-md-7">
                    <h1 class="fw-bold"><?php echo htmlspecialchars($toko['nama']); ?></h1>

                    <div class="rating mb-3">
                        <?php echo tampilkanBintang($toko['rating']); ?>
                        <span class="rating-text text-muted">(<?php echo htmlspecialchars($toko['rating']); ?>)</span>
                    </div>


                    <p><i class="fas fa-map-marker-alt text-danger"></i> <b>Alamat:</b> <?php echo htmlspecialchars($toko['alamat']); ?></p>
                    <p><i class="fas fa-clock text-primary"></i> <b>Jam Operasional:</b> 08:00 - 20:00</p>
                    <p><i class="fas fa-info-circle text-warning"></i> <b>Deskripsi:</b> <?php echo htmlspecialchars($toko['deskripsi']); ?></p>

                    <div class="mt-4">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $toko['lat']; ?>,<?php echo $toko['lon']; ?>"
                            target="_blank" class="btn btn-warning me-2">
                            <i class="fas fa-map"></i> Buka di Google Maps
                        </a>

                        <button id="route-btn" class="btn btn-warning">
                            <i class="fas fa-route"></i> Lihat Rute
                        </button>
                    </div>
                </div>
            </div>

            <div id="map" class="mt-5 rounded shadow" style="height: 400px;"></div>

            <input type="hidden" id="toko-lat" value="<?php echo $toko['lat']; ?>">
            <input type="hidden" id="toko-lon" value="<?php echo $toko['lon']; ?>">
        <?php else: ?>
            <p class="text-danger">Toko tidak ditemukan.</p>
        <?php endif; ?>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.3/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var map = L.map('map').setView([-6.914744, 107.609810], 13); // Default ke Bandung

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            var tokoLat = parseFloat(document.getElementById("toko-lat").value);
            var tokoLon = parseFloat(document.getElementById("toko-lon").value);

            var tokoMarker = L.marker([tokoLat, tokoLon]).addTo(map)
                .bindPopup("<?php echo htmlspecialchars($toko['nama']); ?>")
                .openPopup();

            document.getElementById("route-btn").addEventListener("click", function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var userLat = position.coords.latitude;
                        var userLon = position.coords.longitude;

                        L.marker([userLat, userLon]).addTo(map)
                            .bindPopup("Lokasi Anda")
                            .openPopup();

                        L.Routing.control({
                            waypoints: [
                                L.latLng(userLat, userLon),
                                L.latLng(tokoLat, tokoLon)
                            ],
                            routeWhileDragging: true
                        }).addTo(map);

                        map.fitBounds([
                            [userLat, userLon],
                            [tokoLat, tokoLon]
                        ]);
                    }, function(error) {
                        alert("Gagal mendapatkan lokasi: " + error.message);
                    });
                } else {
                    alert("Geolokasi tidak didukung di browser ini.");
                }
            });
        });
    </script>
    <footer class="bg-dark text-white text-center p-3 mt-4">
        &copy; 2025 Outdoor Hub
    </footer>
</body>

</html>