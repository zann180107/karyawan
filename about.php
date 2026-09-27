<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>About Us - Smart Farming</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.team-photo{
    width:150px;
    height:150px;
    object-fit:cover;
    border-radius:50%;
    margin:auto;
    display:block;
}
.hero{
    background: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),
                url('gambar.jpg');
    background-size: cover;
    background-position: center;
    height: 50vh;
    color: white;
    display: flex;
    align-items: center;
}

.team-card{
    transition: 0.3s;
}

.team-card:hover{
    transform: translateY(-5px);
}

</style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">

        <a class="navbar-brand" href="home.php">
            🌱 Smart Farming
        </a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="home.php">Home</a>
            <a class="nav-link active" href="about.php">About Us</a>
            <a class="nav-link" href="contact.php">Contact</a>
            <a class="nav-link" href="login.php">Login</a>
        </div>

    </div>
</nav>

<!-- Hero -->
<section class="hero">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">About Us</h1>
        <p class="lead">
            Mengenal lebih dekat Smart Farming System
        </p>
    </div>
</section>

<!-- Tentang -->
<section class="py-5">
<div class="container">

<h2 class="text-center mb-4">Tentang Smart Farming</h2>

<p class="text-center">
Smart Farming merupakan sistem pertanian modern berbasis teknologi
yang memanfaatkan sensor, Internet of Things (IoT), dan analisis data
untuk membantu petani memantau kondisi tanaman secara real-time.
Tujuan utama sistem ini adalah meningkatkan produktivitas,
efisiensi penggunaan sumber daya, serta kualitas hasil pertanian.
</p>

</div>
</section>

<!-- Visi Misi -->
<section class="bg-light py-5">
<div class="container">

<div class="row">

<div class="col-md-6">
<h3>Visi</h3>

<p>
Menjadi solusi pertanian cerdas yang mendukung ketahanan pangan
melalui pemanfaatan teknologi digital yang inovatif dan berkelanjutan.
</p>
</div>

<div class="col-md-6">
<h3>Misi</h3>

<ul>
<li>Mengembangkan teknologi pertanian berbasis IoT.</li>
<li>Menyediakan informasi pertanian secara real-time.</li>
<li>Meningkatkan efisiensi pengelolaan lahan pertanian.</li>
<li>Mendukung pertanian modern yang ramah lingkungan.</li>
</ul>

</div>

</div>

</div>
</section>

<!-- Tim -->
<section class="py-5">

<div class="container">

<h2 class="text-center mb-5">
Tim Pengembang
</h2>

<div class="row justify-content-center">

<div class="col-md-4 mb-4">

<div class="card team-card text-center">

<div class="card-body">

<img src="anggota/fauzan.jpg"class="team-photo">

<h5>MUHAMAD FAUZAN</h5>

<p class="text-muted">
Project Leader & Developer
</p>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card team-card text-center">

<div class="card-body">

<img src="anggota/taufik.jpg" class="team-photo">

<h5>TAUFIK GUNAWANSYAH</h5>

<p class="text-muted">
Anggota
</p>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card team-card text-center">

<div class="card-body">

<img src="anggota/linggar.jpg" class="team-photo">

<h5>LINGGAR PRASETYO</h5>

<p class="text-muted">
Anggota
</p>

</div>

</div>

</div>

</div>

</div>
<div class="row justify-content-center">

<div class="col-md-4 mb-4">

<div class="card team-card text-center">

<div class="card-body">

<img src="anggota/alya.jpg"class="team-photo">

<h5>ALYA MULYASAR</h5>

<p class="text-muted">
Anggota
</p>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card team-card text-center">

<div class="card-body">

<img src="anggota/hafiz.jpg" class="team-photo">

<h5>MUHAMAD HAFIZ</h5>

<p class="text-muted">
Anggota
</p>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card team-card text-center">

<div class="card-body">

<img src="anggota/arfi.jpg" class="team-photo">

<h5>ARFI</h5>

<p class="text-muted">
Anggota
</p>

</div>

</div>

</div>

</div>

</div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">

<p class="mb-0">
© 2026 Smart Farming System
</p>

</footer>

</body>
</html>