<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

include "../config.php";

// Statistik
$totalLahan = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM lahan"))['total'];
$totalDevice = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM device"))['total'];
$totalSensor = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM sensor"))['total'];
$totalAktuator = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM aktuator"))['total'];

// Device Online
$online = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM device WHERE status='Online'"))['total'];
$offline = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM device WHERE status='Offline'"))['total'];

/* ==========================
   Data Aktuator
========================== */

$aktuator = mysqli_query($conn,"
SELECT *
FROM aktuator
ORDER BY id_aktuator ASC
");

// Device Online
$online = mysqli_fetch_assoc(mysqli_query($conn,"
SELECT COUNT(*) AS total
FROM device
WHERE status='Online'
"))['total'];

$grafik = mysqli_query($conn,"
SELECT
    ds.nilai,
    ds.waktu,
    s.nama_sensor
FROM data_sensor ds
JOIN sensor s
ON ds.id_sensor = s.id_sensor
ORDER BY ds.waktu ASC
");

$monitoring = mysqli_query($conn,"
SELECT
    s.nama_sensor,
    s.satuan,
    ds.nilai,
    ds.waktu
FROM sensor s
LEFT JOIN (
    SELECT d1.*
    FROM data_sensor d1
    INNER JOIN (
        SELECT id_sensor, MAX(waktu) AS waktu
        FROM data_sensor
        GROUP BY id_sensor
    ) d2
    ON d1.id_sensor=d2.id_sensor
    AND d1.waktu=d2.waktu
) ds
ON s.id_sensor=ds.id_sensor
ORDER BY s.id_sensor ASC
");
$sensorWidget = [];

$q = mysqli_query($conn,"
SELECT
    s.nama_sensor,
    s.satuan,
    ds.nilai
FROM sensor s
LEFT JOIN (
    SELECT d1.*
    FROM data_sensor d1
    INNER JOIN (
        SELECT id_sensor,MAX(waktu) waktu
        FROM data_sensor
        GROUP BY id_sensor
    ) x
    ON d1.id_sensor=x.id_sensor
    AND d1.waktu=x.waktu
) ds
ON s.id_sensor=ds.id_sensor
");

while($r=mysqli_fetch_assoc($q)){

    $sensorWidget[$r['nama_sensor']]=$r;

}

$label = [];
$suhu = [];
$kelembaban = [];
$ph = [];

while($g = mysqli_fetch_assoc($grafik)){

    $jam = date("H:i", strtotime($g['waktu']));

    if(!in_array($jam,$label)){
        $label[] = $jam;
    }

    if($g['nama_sensor']=="Suhu"){
        $suhu[] = $g['nilai'];
    }

    if($g['nama_sensor']=="Kelembaban"){
        $kelembaban[] = $g['nilai'];
    }

    if($g['nama_sensor']=="pH"){
        $ph[] = $g['nilai'];
    }

}

?>

<?php include "../includes/header.php"; ?>

<?php include "../includes/sidebar.php"; ?>

<div class="main">

<?php include "../includes/navbar.php"; ?>

<div class="container-fluid">




<div class="main">
    <div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-4">




<h2 class="mt-4">

Dashboard Smart Farming

</h2>

</div>

<?php include "../includes/dashboard/statistics.php"; ?>


   

<div class="row mt-4">

    <?php include "../includes/dashboard/charts.php"; ?>

    <?php include "../includes/dashboard/device_status.php"; ?>

</div>


<?php include "../includes/dashboard/monitoring.php"; ?>

<?php include "../includes/dashboard/widgets.php"; ?>

<?php include "../includes/dashboard/gauge.php"; ?>

<?php include "../includes/dashboard/quick_control.php"; ?>

<?php include "../includes/dashboard/notification.php"; ?>



<div class="row mt-4">

<div class="col-lg-6">

<div class="card shadow rounded-4">

<div class="card-header bg-success text-white">

📡 Status ESP32

</div>

<div class="card-body">

<table class="table">

<tr>

<td>ESP32-01</td>

<td>

<span class="badge bg-success">

Online

</span>

</td>

</tr>

<tr>

<td>IP Address</td>

<td>

192.168.1.20

</td>

</tr>

<tr>

<td>Last Update</td>

<td>

2 detik lalu

</td>

</tr>

</table>

</div>

</div>

</div>

<script>

const chartLabels = <?= json_encode($label) ?>;

const suhuData = <?= json_encode($suhu) ?>;

const kelembabanData = <?= json_encode($kelembaban) ?>;

const phData = <?= json_encode($ph) ?>;

</script>

<script src="../assets/js/chart.js"></script>

<?php include "../includes/footer.php"; ?>

