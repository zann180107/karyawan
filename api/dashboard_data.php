<?php
include "../config.php";

header('Content-Type: application/json');

$data = [];

/* ===========================
   Statistik
=========================== */

$data['totalLahan'] = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) total FROM lahan")
)['total'];

$data['totalDevice'] = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) total FROM device")
)['total'];

$data['totalSensor'] = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) total FROM sensor")
)['total'];

$data['totalAktuator'] = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) total FROM aktuator")
)['total'];

/* ===========================
   Device
=========================== */

$data['online'] = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) total FROM device WHERE status='Online'")
)['total'];

$data['offline'] = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) total FROM device WHERE status='Offline'")
)['total'];

echo json_encode($data);