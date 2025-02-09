<?php
require 'koneksi.php'; // Panggil koneksi database

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Pastikan login ke tabel yang benar (users atau user)
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    
    if (mysqli_num_rows($query) > 0) {
        $user = mysqli_fetch_assoc($query);
        
        // Gunakan password_verify() untuk mencocokkan password
        if (password_verify($password, $user['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $user['username'];
            header('Location: index.php'); // Arahkan ke halaman utama
            exit();
        } else {
            echo "<script>alert('Password salah!');</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Outdoor Camping</title>
        <link rel="stylesheet" href="styles.css">
        <!-- Import Font Awesome untuk ikon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body class="login-body">
        <div class="login-container">
            <div class="login-card">
                <div class="login-header">
                    <h3>Login</h3>
                    <p>Login untuk masuk ke Akun Anda</p>
                </div>
                <div class="login-form">
                    <form method="post">
                        <div class="form-group">
                            <label for="inputEmail"><i class="fas fa-user"></i> Username</label>
                            <input type="text" id="inputEmail" name="username" placeholder="Masukkan username" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword"><i class="fas fa-lock"></i> Password</label>
                            <input type="password" id="inputPassword" name="password" placeholder="Masukkan password" required>
                        </div>
                        <button type="submit" name="login" class="btn-login">Login</button>
                    </form>
                </div>
                <div class="login-footer">
                    <p>Belum punya akun? <a href="registrasi.php">Daftar di sini</a></p>
                    <p>Masuk Tanpa Akun <a href="index.php">Disini</a></p>
                </div>
            </div>
        </div>
    </body>
</html>