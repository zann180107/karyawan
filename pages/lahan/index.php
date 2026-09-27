<?php
session_start();

include "../../config.php";

$data=mysqli_query($conn,"
SELECT
lahan.*,
users.nama
FROM lahan
LEFT JOIN users
ON users.id_user=lahan.id_user
");
?>

<?php include "../../includes/header.php"; ?>
<?php include "../../includes/sidebar.php"; ?>

<div class="main">

<?php include "../../includes/navbar.php"; ?>

<div class="container-fluid mt-4">

<h2>Data Lahan</h2>

<a href="tambah.php"
class="btn btn-success mb-3">

Tambah Lahan

</a>

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>No</th>

<th>Nama Lahan</th>

<th>Lokasi</th>

<th>Luas</th>

<th>Penanggung Jawab</th>

<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php

$no=1;

while($d=mysqli_fetch_array($data))

{

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['nama_lahan']; ?></td>

<td><?= $d['lokasi']; ?></td>

<td><?= $d['luas']; ?> m²</td>

<td><?= $d['nama']; ?></td>

<td>

<a

href="edit.php?id=<?= $d['id_lahan']; ?>"

class="btn btn-warning btn-sm">

Edit

</a>

<a

href="hapus.php?id=<?= $d['id_lahan']; ?>"

class="btn btn-danger btn-sm"

onclick="return confirm('Hapus data?')">

Hapus

</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

<?php include "../../includes/footer.php"; ?>