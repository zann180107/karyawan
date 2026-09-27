<?php

include "../config.php";

header('Content-Type: application/json');

$data=[];

$data['lahan']=mysqli_fetch_assoc(

mysqli_query($conn,"SELECT COUNT(*) total FROM lahan")

)['total'];

$data['device']=mysqli_fetch_assoc(

mysqli_query($conn,"SELECT COUNT(*) total FROM device")

)['total'];

$data['sensor']=mysqli_fetch_assoc(

mysqli_query($conn,"SELECT COUNT(*) total FROM sensor")

)['total'];

$data['aktuator']=mysqli_fetch_assoc(

mysqli_query($conn,"SELECT COUNT(*) total FROM aktuator")

)['total'];

$data['online']=mysqli_fetch_assoc(

mysqli_query($conn,"SELECT COUNT(*) total FROM device WHERE status='Online'")

)['total'];

$data['offline']=mysqli_fetch_assoc(

mysqli_query($conn,"SELECT COUNT(*) total FROM device WHERE status='Offline'")

)['total'];

echo json_encode($data);