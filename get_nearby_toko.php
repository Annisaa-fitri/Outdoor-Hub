<?php
require_once 'koneksi.php';

$lat = $_GET['lat'];
$lon = $_GET['lon'];

$query = "SELECT id, nama, lat, lon, alamat,
          (6371 * acos(cos(radians($lat)) * cos(radians(lat)) * cos(radians(lon) - radians($lon)) + sin(radians($lat)) * sin(radians(lat)))) AS jarak
          FROM toko
          ORDER BY jarak ASC
          LIMIT 3";

$result = $conn->query($query);
$toko = [];

while ($row = $result->fetch_assoc()) {
    $toko[] = $row;
}

echo json_encode($toko);
?>
