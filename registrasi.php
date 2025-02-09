<?php
require 'koneksi.php'; // Pastikan file koneksi.php sudah ada

$error = '';
$success = '';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    // Cek apakah tabel users memiliki data
    $check = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM users");

    if ($check) {
        $row = mysqli_fetch_assoc($check);
        // echo "Jumlah data dalam tabel users: " . $row['jumlah'] . "<br>";

        if ($row['jumlah'] == 0) {
            // Reset auto-increment jika tabel kosong
            mysqli_query($conn, "ALTER TABLE users AUTO_INCREMENT = 1")
                or die(mysqli_error($conn));
        }

        // Panggil fungsi registrasi
        $message = submitRegistration($conn, $username, $password, $alamat, $tanggal_lahir);
        echo $message; // Tampilkan pesan sukses atau error
    } else {
        echo "Error pada query: " . mysqli_error($conn);
    }
}

function submitRegistration($conn, $username, $password, $alamat, $tanggal_lahir)
{
    $check_username = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($check_username) > 0) {
        $error = "Username sudah digunakan!";
    } else {
        // Hash password sebelum disimpan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke database
        $query = "INSERT INTO users (username, password, alamat, tanggal_lahir) VALUES ('$username', '$hashed_password', '$alamat', '$tanggal_lahir')";
        if (mysqli_query($conn, $query)) {
            $success = "Registrasi berhasil! Silakan login.";
        } else {
            $error = "Terjadi kesalahan saat registrasi: " . mysqli_error($conn);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Outdoor Camping</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="login-body">
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h3>Registrasi</h3>
                <p>Buat akun baru untuk mulai menjelajahi toko outdoor kami.</p>
            </div>
            <div class="login-form">
                <?php if ($error): ?>
                    <div class="alert alert-error"><?php echo $error; ?></div>
                <?php endif; ?>
                <?php if ($success): ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php endif; ?>
                <form method="post">
                    <div class="form-group">
                        <label for="username"><i class="fas fa-user"></i> Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat"><i class="fas fa-map-marker-alt"></i> Alamat</label>
                        <select id="alamat" name="alamat" required>
                            <option value="">Pilih Wilayah</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Bali">Bali</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fas fa-lock"></i> Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir"><i class="fas fa-calendar"></i> Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <button type="submit" name="register" class="btn-login">Daftar</button>
                </form>
            </div>
            <div class="login-footer">
                <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
            </div>
        </div>
    </div>
</body>

</html>