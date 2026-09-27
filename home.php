<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Smart Farming</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.hero{
    background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),
                url('gambar.jpg');
    background-size: cover;
    background-position: center;
    height: 80vh;
    color: white;
    display: flex;
    align-items: center;
}

.feature-box{
    padding: 30px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,.1);
    background: white;
    height: 100%;
}
</style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="#">🌱 Smart Farming</a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="home.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">
            Sistem Smart Farming Modern
        </h1>

        <p class="lead">
            Monitoring dan pengelolaan pertanian berbasis teknologi untuk meningkatkan produktivitas dan efisiensi.
        </p>

        <a href="login.php" class="btn btn-success btn-lg">
            Mulai Sekarang
        </a>
    </div>
</section>

<!-- Fitur -->
<section class="py-5">
<div class="container">

    <h2 class="text-center mb-5">
        Fitur Unggulan
    </h2>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="feature-box">
                <h4>🌡 Monitoring Suhu</h4>
                <p>
                    Pantau suhu lahan dan greenhouse secara real-time.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="feature-box">
                <h4>💧 Monitoring Kelembaban</h4>
                <p>
                    Mengontrol kelembaban tanah untuk pertumbuhan tanaman optimal.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="feature-box">
                <h4>📊 Laporan Data</h4>
                <p>
                    Menampilkan grafik dan laporan hasil monitoring secara otomatis.
                </p>
            </div>
        </div>

    </div>
</div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">
        © 2026 Smart Farming System | Universitas Anda
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>