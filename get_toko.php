<?php
header('Content-Type: application/json');
require_once 'koneksi.php';

$sql = "SELECT id, nama, alamat, lat, lon FROM toko";
$result = $conn->query($sql);

$tokoList = [];
while ($row = $result->fetch_assoc()) {
    $tokoList[] = $row;
}

echo json_encode($tokoList);
$conn->close();
?>
