<?php

include "../config.php";

$id=$_GET['id'];

$data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE id_user='$id'"));

if(isset($_POST['update'])){

$nama=$_POST['nama'];

$username=$_POST['username'];

$role=$_POST['role'];

mysqli_query($conn,"UPDATE users SET

nama='$nama',

username='$username',

role='$role'

WHERE id_user='$id'");

header("Location:index.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Edit User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Edit User</h2>

<form method="POST">

<input
type="text"
name="nama"
class="form-control mb-3"
value="<?= $data['nama']; ?>">

<input
type="text"
name="username"
class="form-control mb-3"
value="<?= $data['username']; ?>">

<select
name="role"
class="form-control mb-3">

<option <?=($data['role']=="Admin")?"selected":"";?>>
Admin
</option>

<option <?=($data['role']=="Petugas")?"selected":"";?>>
Petugas
</option>

</select>

<button
name="update"
class="btn btn-primary">

Update

</button>

<a href="index.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</body>

</html>