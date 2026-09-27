<?php

include "../config.php";

$q=mysqli_query($conn,"
SELECT
s.nama_sensor,
ds.nilai,
s.satuan
FROM sensor s
JOIN data_sensor ds
ON s.id_sensor=ds.id_sensor
ORDER BY ds.waktu DESC
");

$data=[];

while($r=mysqli_fetch_assoc($q)){

$data[]=$r;

}

echo json_encode($data);