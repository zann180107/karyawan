<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location:../login.php");
    exit();
}

include "../config.php";

$data = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>

<head>

<title>Data User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<div class="container mt-5">

<h2>Data User</h2>

<a href="tambah.php"
class="btn btn-success mb-3">

Tambah User

</a>

<table class="table table-bordered table-hover">

<tr>

<th>No</th>

<th>Nama</th>

<th>Username</th>

<th>Role</th>

<th>Aksi</th>

</tr>

<?php

$no=1;

while($d=mysqli_fetch_array($data))

{

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['nama']; ?></td>

<td><?= $d['username']; ?></td>

<td><?= $d['role']; ?></td>

<td>

<a

href="edit.php?id=<?= $d['id_user']; ?>"

class="btn btn-warning btn-sm">

Edit

</a>

<a

href="hapus.php?id=<?= $d['id_user']; ?>"

class="btn btn-danger btn-sm"

onclick="return confirm('Hapus user?')">

Hapus

</a>

</td>

</tr>

<?php } ?>

</table>

<a href="../dashboard.php"
class="btn btn-secondary">

Kembali Dashboard

</a>

</div>

</body>

</html>