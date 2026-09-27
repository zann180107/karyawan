<?php

include "../config.php";

header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD'] != "POST"){
    echo json_encode([
        "status"=>"error",
        "message"=>"Gunakan metode POST"
    ]);
    exit();
}

/* Ambil data dari ESP32 */

$device      = $_POST['device'] ?? "";
$suhu        = $_POST['suhu'] ?? "";
$kelembaban  = $_POST['kelembaban'] ?? "";
$ph          = $_POST['ph'] ?? "";

/* Validasi */

if($device=="" || $suhu=="" || $kelembaban=="" || $ph==""){

    echo json_encode([
        "status"=>"error",
        "message"=>"Data tidak lengkap"
    ]);

    exit();
}

/* Update status device */

mysqli_query($conn,"
UPDATE device
SET
status='Online',
last_seen=NOW()
WHERE nama_device='$device'
");

/* Cari id sensor berdasarkan jenis_sensor */

function getSensorId($conn,$jenis){

    $q=mysqli_query($conn,"
    SELECT id_sensor
    FROM sensor
    WHERE jenis_sensor='$jenis'
    LIMIT 1
    ");

    $d=mysqli_fetch_assoc($q);

    return $d['id_sensor'];

}

$idSuhu=getSensorId($conn,"Suhu");
$idHum=getSensorId($conn,"Kelembaban");
$idPh=getSensorId($conn,"pH");

/* Simpan data */

mysqli_query($conn,"
INSERT INTO data_sensor(id_sensor,nilai,waktu)
VALUES($idSuhu,$suhu,NOW())
");

mysqli_query($conn,"
INSERT INTO data_sensor(id_sensor,nilai,waktu)
VALUES($idHum,$kelembaban,NOW())
");

mysqli_query($conn,"
INSERT INTO data_sensor(id_sensor,nilai,waktu)
VALUES($idPh,$ph,NOW())
");

echo json_encode([
    "status"=>"success"
]);