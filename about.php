<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
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

    <!-- Hero Section -->
    <header class="d-flex align-items-center justify-content-around mt-5 pt-5">
        <div class="deskripsi text-center text-md-start">
            <h1 class="title">Bleach: Sennen Kessen-hen - Ketsubetsu-tan</h1>
            <p>Serial televisi anime Jepang berdasarkan manga Bleach oleh Tite Kubo. Mengisahkan perang terakhir "Perang Darah Seribu Tahun" yang menjadi sekuel langsung serial anime Bleach.</p>
            <a href="#about" class="btn btn-primary">Read More</a>
        </div>
        <img class="img-fluid rounded-3 shadow-lg" style="width: 500px;" src="../img/bleach/bleach.jpg" alt="Bleach Poster">
    </header>

    <!-- About Section -->
    <section class="about py-5" id="about">
        <div class="container d-flex flex-column flex-md-row align-items-center">
            <img src="../img/bleach/bleach.jpg" class="rounded shadow-lg" style="width: 300px;" alt="Bleach Image">
            <div class="deskripsi ms-md-5 mt-4 mt-md-0 info-card">
                <h2 class="title">Bleach: Sennen Kessen-hen - Ketsubetsu-tan</h2>
                <p>Pengganti Soul Reaper Ichigo Kurosaki bersama teman-temannya melawan ancaman roh jahat yang ingin menghapus dunia manusia dan Soul Society untuk selamanya.</p>
                <p><strong>Genre:</strong> Action, Adventure, Fantasy</p>
                <p><strong>Studio:</strong> Pierrot</p>
            </div>
        </div>
    </section>

    <!-- Trailer Section -->
    <section id="trailer" class="text-center py-5">
        <h2 class="title mb-4">Trailer Bleach: Sennen Kessen-hen - Ketsubetsu-tan</h2>
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/XoXvsSuPqFw" frameborder="0" allowfullscreen></iframe>
    </section>

    <!-- Light Novel Section -->
    <section class="novel py-5">
        <div class="container">
            <h2 class="title text-center mb-4">Light Novel</h2>
            <div class="row g-3 justify-content-center">
                <div class="col-6 col-md-3">
                    <img src="../img/bleach/1.jpeg" class="img-fluid rounded shadow" alt="Novel 1">
                </div>
                <div class="col-6 col-md-3">
                    <img src="../img/bleach/2.jpg" class="img-fluid rounded shadow" alt="Novel 2">
                </div>
                <div class="col-6 col-md-3">
                    <img src="../img/bleach/3.jpeg" class="img-fluid rounded shadow" alt="Novel 3">
                </div>
                <div class="col-6 col-md-3">
                    <img src="../img/bleach/4.jpg" class="img-fluid rounded shadow" alt="Novel 4">
                </div>
            </div>
        </div>
    </section>

    <!-- Characters Section -->
    <section class="characters py-5">
        <div class="container">
            <h2 class="title text-center mb-5">Karakter</h2>
            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <img src="../img/bleach/ichigo.png" class="img-fluid rounded" alt="Ichigo">
                    <h3>Ichigo Kurosaki</h3>
                    <p>Seorang pengganti Soul Reaper yang berani melindungi teman-temannya dan bertarung melawan musuh yang mengancam dunia.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="../img/bleach/rukia.png" class="img-fluid rounded" alt="Rukia">
                    <h3>Rukia Kuchiki</h3>
                    <p>Shinigami yang kuat dengan masa lalu yang penuh perjuangan dan tekad yang besar.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="../img/bleach/ishida.png" class="img-fluid rounded" alt="Uryuu">
                    <h3>Uryuu Ishida</h3>
                    <p>Quincy terakhir yang masih hidup dan teman setia Ichigo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3 text-center">
        <p>Copyright &copy; 2023 - WibuCode</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>