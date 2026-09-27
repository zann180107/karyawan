<?php
session_start();
include 'config.php';

$error = "";

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = md5($_POST['password']);

    $query = mysqli_query($conn,"
        SELECT * FROM users
        WHERE username='$username'
        AND password='$password'
    ");

    if(mysqli_num_rows($query) > 0){

        $data = mysqli_fetch_assoc($query);

        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama_lengkap'];
        $_SESSION['role'] = $data['role'];

        header("Location: pages/dashboard.php");
        exit();

    }else{
        $error = "Username atau Password Salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Smart Farming Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    overflow:hidden;
    height:100vh;
}

.left-side{
    background:#f5f5f5;
    height:100vh;
    position:relative;
}

.right-side{
    background:url('gambar.jpg');
    background-size:cover;
    background-position:center;
    height:100vh;
}

.left-side{
    background:url('gambar1.jpg');
    background-size:cover;
    background-position:center;
    height:100vh;
}

.brand{
    color:#4db7bc;
    font-size:42px;
    font-weight:300;
    line-height:1.2;
}

.login-title{
    font-size:56px;
    font-weight:300;
}

.form-control{
    border:none;
    border-bottom:2px solid #8dd4d7;
    border-radius:0;
    background:transparent;
}

.form-control:focus{
    box-shadow:none;
    border-color:#4db7bc;
}

.btn-login{
    background:#62c2c7;
    border:none;
    color:white;
    width:150px;
    height:45px;
}

.btn-login:hover{
    background:#49b0b5;
}

.navbar-custom{
    position:absolute;
    top:40px;
    right:60px;
}

.navbar-custom a{
    text-decoration:none;
    color:black;
    margin-left:30px;
    font-weight:500;
}

.pattern{
    position:absolute;
    width:100%;
    height:100%;
    background-image:
    linear-gradient(#cfcfcf 1px, transparent 1px),
    linear-gradient(90deg,#cfcfcf 1px,transparent 1px);
    background-size:80px 80px;
    opacity:.15;
}

.login-container{
    z-index:10;
    position:relative;
}

</style>

</head>

<body>

<div class="container-fluid">
<div class="row">

<div class="col-lg-6 left-side">

<div class="pattern"></div>

<div class="container h-100 d-flex justify-content-center align-items-center">

<div class="login-container" style="width:350px;">

<div class="brand mb-5">
Smart<br>Farming
</div>

<h1 class="login-title text-center mb-5">
Log in
</h1>

<?php if($error!=""){ ?>
<div class="alert alert-danger">
    <?php echo $error; ?>
</div>
<?php } ?>

<form method="POST">

<div class="mb-4 input-group">

<span class="input-group-text border-0 bg-transparent">
<i class="fa-solid fa-user"></i>
</span>

<input type="text"
name="username"
class="form-control"
placeholder="Username"
required>

</div>

<div class="mb-4 input-group">

<span class="input-group-text border-0 bg-transparent">
<i class="fa-solid fa-lock"></i>
</span>

<input type="password"
name="password"
class="form-control"
placeholder="Password"
required>

</div>

<div class="d-flex justify-content-between mb-4">

<div>
<input type="checkbox">
Remember Me
</div>

<a href="#" class="text-secondary text-decoration-none">
Forgot Password?
</a>

</div>

<div class="text-center">

<button type="submit"
name="login"
class="btn btn-login">
Log In
</button>

</div>

<div class="text-center mt-3">
or
<a href="register.php"
class="text-decoration-none text-info">
Sign Up
</a>
</div>

</form>

</div>
</div>
</div>

<div class="col-lg-6 right-side position-relative">

<div class="navbar-custom">
<a href="home.php">HOME</a>
<a href="about.php">ABOUT US</a>
<a href="contact.php">CONTACT</a>
<a href="#"><b>LOG IN</b></a>
</div>

</div>

</div>
</div>

</body>
</html>