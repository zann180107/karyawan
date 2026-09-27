<?php
include "../config.php";

header('Content-Type: application/json');

$data = [];

$query = mysqli_query($conn,"
SELECT
    s.nama_sensor,
    s.satuan,
    ds.nilai,
    ds.waktu
FROM sensor s
JOIN data_sensor ds
ON s.id_sensor = ds.id_sensor
WHERE ds.id_data IN(
    SELECT MAX(id_data)
    FROM data_sensor
    GROUP BY id_sensor
)
ORDER BY s.id_sensor
");

while($row = mysqli_fetch_assoc($query)){

    $status = "Normal";
    $badge  = "success";

    switch(strtolower($row['nama_sensor'])){

        case "suhu":
            if($row['nilai']>35){
                $status="Panas";
                $badge="danger";
            }elseif($row['nilai']>=30){
                $status="Hangat";
                $badge="warning";
            }
        break;

        case "kelembaban":
            if($row['nilai']<40){
                $status="Kering";
                $badge="danger";
            }elseif($row['nilai']<60){
                $status="Sedang";
                $badge="warning";
            }
        break;

        case "ph":
            if($row['nilai']<6 || $row['nilai']>7.5){
                $status="Tidak Ideal";
                $badge="danger";
            }
        break;
    }

    $data[] = [
        "sensor"=>$row['nama_sensor'],
        "nilai"=>$row['nilai']." ".$row['satuan'],
        "status"=>$status,
        "badge"=>$badge,
        "waktu"=>date("H:i:s",strtotime($row['waktu']))
    ];
}

echo json_encode($data);