<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Tentang Kami - Outdoor Hub</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="toko.php"><i class="fas fa-store"></i> Toko</a></li>
                <li class="nav-item"><a class="nav-link active" href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
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

<!-- About Section -->
<div class="container about-section">
    <h2 class="mb-4">Tentang Kami</h2>
    <p class="lead">Outdoor Hub adalah platform yang memudahkan pencarian dan penyewaan peralatan camping. Dengan peta interaktif dan informasi lengkap toko, kami membantu Anda menemukan perlengkapan outdoor terbaik dengan mudah. 🌿🏕️</p>
</div>

<!-- Team Section -->
<!-- Team Section -->
<div class="container team-section">
    <h3 class="text-center mb-4">Tim Kami</h3>
    <div class="row justify-content-center text-center">
        <div class="col-md-4 col-sm-6 team-member">
            <img src="assets/about/rexa.png" class="img-fluid rounded-circle" alt="Rexa Apriliandy">
            <h5 class="mt-3 fw-bold">Rexa Apriliandy</h5>
            <p>Fullstack Developer (PM)</p>
        </div>
        <div class="col-md-4 col-sm-6 team-member">
            <img src="assets/about/fred.png" class="img-fluid rounded-circle" alt="Frederick Cornelius">
            <h5 class="mt-3 fw-bold">Frederick Cornelius</h5>
            <p>Fullstack Developer</p>
        </div>
        <div class="col-md-4 col-sm-6 team-member">
            <img src="assets/about/teta.png" class="img-fluid rounded-circle" alt="Tetta Trisky">
            <h5 class="mt-3 fw-bold">Tetta Trisky</h5>
            <p>Fullstack Developer</p>
        </div>
    </div>
    <div class="row justify-content-center text-center mt-4">
        <div class="col-md-4 col-sm-6 team-member">
            <img src="assets/about/anisa.png" class="img-fluid rounded-circle" alt="Annisa Fitri">
            <h5 class="mt-3 fw-bold">Annisa Fitri</h5>
            <p>Technical Writer</p>
        </div>
        <div class="col-md-4 col-sm-6 team-member">
            <img src="assets/about/tasya.png" class="img-fluid rounded-circle" alt="Tasya Tirta Sari">
            <h5 class="mt-3 fw-bold">Tasya Tirta Sari</h5>
            <p>Technical Writer</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    &copy; 2025 Outdoor Hub
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
