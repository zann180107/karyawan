<?php
include "../config.php";

header("Content-Type: application/json");

$data = [];

$query = mysqli_query($conn,"
SELECT
    s.nama_sensor,
    s.satuan,
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

    $status = "Normal";
    $warna  = "success";
    $icon   = "fa-circle";

    switch(strtolower($row['nama_sensor'])){

        case "suhu":
            $icon = "fa-temperature-half";

            if($row['nilai']>=35){
                $status="Panas";
                $warna="danger";
            }elseif($row['nilai']>=30){
                $status="Hangat";
                $warna="warning";
            }
        break;

        case "kelembaban":
            $icon="fa-droplet";

            if($row['nilai']<40){
                $status="Kering";
                $warna="danger";
            }elseif($row['nilai']<60){
                $status="Sedang";
                $warna="warning";
            }
        break;

        case "ph":
            $icon="fa-flask";

            if($row['nilai']<6){
                $status="Asam";
                $warna="warning";
            }elseif($row['nilai']>7.5){
                $status="Basa";
                $warna="danger";
            }
        break;

        case "soil moisture":
            $icon="fa-seedling";
        break;
    }

    $data[] = [
        "sensor"=>$row['nama_sensor'],
        "nilai"=>$row['nilai'],
        "satuan"=>$row['satuan'],
        "status"=>$status,
        "warna"=>$warna,
        "icon"=>$icon
    ];
}

echo json_encode($data);