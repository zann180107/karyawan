<?php
include "../config.php";

header("Content-Type: application/json");

$data = [];

$query = mysqli_query($conn,"
SELECT
    s.jenis_sensor,
    ds.nilai
FROM sensor s
JOIN data_sensor ds
ON s.id_sensor = ds.id_sensor
WHERE ds.id_data IN(
    SELECT MAX(id_data)
    FROM data_sensor
    GROUP BY id_sensor
)
");

while($row = mysqli_fetch_assoc($query)){

    $key = strtolower($row['jenis_sensor']);

    $data[$key] = (float)$row['nilai'];

}

echo json_encode($data);