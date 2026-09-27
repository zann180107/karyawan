<?php

include "../config.php";

if(isset($_POST['simpan'])){

$nama=$_POST['nama'];

$username=$_POST['username'];

$password=md5($_POST['password']);

$role=$_POST['role'];

mysqli_query($conn,"INSERT INTO users

(nama,username,password,role)

VALUES

('$nama','$username','$password','$role')

");

header("Location:index.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Tambah User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Tambah User</h2>

<form method="POST">

<input
type="text"
name="nama"
class="form-control mb-3"
placeholder="Nama"
required>

<input
type="text"
name="username"
class="form-control mb-3"
placeholder="Username"
required>

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Password"
required>

<select
name="role"
class="form-control mb-3">

<option>Admin</option>

<option>Petugas</option>

</select>

<button
name="simpan"
class="btn btn-success">

Simpan

</button>

<a href="index.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</body>

</html>