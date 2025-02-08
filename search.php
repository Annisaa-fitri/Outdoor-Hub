<?php
require_once 'koneksi.php';

$search = $_GET['query'];

$sql = "SELECT nama FROM toko WHERE nama LIKE ?";
$stmt = $conn->prepare($sql);
$searchParam = "%$search%";
$stmt->bind_param("s", $searchParam);
$stmt->execute();
$result = $stmt->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row['nama'];
}

echo json_encode($data);
$conn->close();
?>
