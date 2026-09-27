<?php
include "../config.php";

if(isset($_POST['id']) && isset($_POST['status'])){

$id = (int)$_POST['id'];
$status = ($_POST['status'] === 'ON') ? 'ON' : 'OFF';

mysqli_query($conn,"
UPDATE aktuator
SET status='$status'
WHERE id_aktuator=$id
");

echo json_encode([
    "success" => true,
    "status" => $status
]);

}else{

echo json_encode([
    "success" => false
]);

}