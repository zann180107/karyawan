<?php
include "../config.php";

header("Content-Type: application/json");

$data = [];

$query = mysqli_query($conn,"
SELECT
    ds.waktu,
    ds.nilai
FROM data_sensor ds
JOIN sensor s
ON ds.id_sensor = s.id_sensor
WHERE LOWER(s.jenis_sensor)='suhu'
ORDER BY ds.id_data DESC
LIMIT 10
");

while($row = mysqli_fetch_assoc($query)){

    $data[] = [
        "jam" => date("H:i", strtotime($row['waktu'])),
        "nilai" => (float)$row['nilai']
    ];
}

echo json_encode(array_reverse($data));