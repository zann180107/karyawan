<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Contact Us - Smart Farming</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

.hero{
    background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),
                url('gambar.jpg');
    background-size: cover;
    background-position: center;
    height: 40vh;
    color: white;
    display: flex;
    align-items: center;
}

.contact-box{
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 0 15px rgba(0,0,0,.1);
    height:100%;
}

.icon{
    color:#198754;
    font-size:25px;
    margin-right:10px;
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
    <a class="nav-link" href="about.php">About Us</a>
    <a class="nav-link active" href="contact.php">Contact</a>
    <a class="nav-link" href="login.php">Login</a>
</div>

</div>
</nav>

<!-- Hero -->
<section class="hero">
<div class="container text-center">

<h1 class="display-5 fw-bold">
Contact Us
</h1>

<p>
Hubungi kami untuk informasi lebih lanjut
</p>

</div>
</section>

<!-- Contact -->
<section class="py-5">

<div class="container">

<div class="row">

<!-- Informasi Kontak -->
<div class="col-md-5 mb-4">

<div class="contact-box">

<h3 class="mb-4">Informasi Kontak</h3>

<p>
<i class="fa-solid fa-location-dot icon"></i>
6Q2H+XPH, Jl. Koramil, Purwasari, Kec. Cicurug, Kabupaten Sukabumi, Jawa Barat 43359
</p>

<p>
<i class="fa-solid fa-phone icon"></i>
+62 812-3456-7890
</p>

<p>
<i class="fa-solid fa-envelope icon"></i>
smartfarming@gmail.com
</p>

<p>
<i class="fa-brands fa-instagram icon"></i>
@smartfarming
</p>

<p>
<i class="fa-brands fa-facebook icon"></i>
Smart Farming Indonesia
</p>

</div>

</div>

<!-- Form Kontak -->
<div class="col-md-7">

<div class="contact-box">

<h3 class="mb-4">Kirim Pesan</h3>

<form>

<div class="mb-3">
<input type="text"
class="form-control"
placeholder="Nama Lengkap"
required>
</div>

<div class="mb-3">
<input type="email"
class="form-control"
placeholder="Email"
required>
</div>

<div class="mb-3">
<input type="text"
class="form-control"
placeholder="Subjek"
required>
</div>

<div class="mb-3">
<textarea class="form-control"
rows="5"
placeholder="Tulis pesan Anda..."
required></textarea>
</div>

<button type="submit"
class="btn btn-success">
Kirim Pesan
</button>

</form>

</div>

</div>

</div>

</div>

</section>

<!-- Maps -->
<section class="pb-5">

<div class="container">

<h3 class="text-center mb-4">
Lokasi Kami
</h3>





<iframe
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7725784124464!2d106.77671497364744!3d-6.797500766478257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68334d5921bf79%3A0x8b4c2ec7db2575da!2sPOLITEKNIK%20ISTIKOM%20BCI!5e0!3m2!1sid!2sus!4v1781977763800!5m2!1sid!2sus"

width="100%"
height="350"
style="border:0;"
allowfullscreen=""
loading="lazy">
</iframe>

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