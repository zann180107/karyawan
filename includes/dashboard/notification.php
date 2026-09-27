<div class="row mt-4">

<div class="col-lg-12">

<div class="card shadow border-0 rounded-4">

<div class="card-header bg-danger text-white">

<h5 class="mb-0">

<i class="fa-solid fa-bell"></i>

Notifikasi Sistem

</h5>

</div>

<div class="card-body">

<ul class="list-group list-group-flush">

<?php

$q=mysqli_query($conn,"
SELECT
s.nama_sensor,
ds.nilai,
s.satuan
FROM sensor s
JOIN data_sensor ds
ON s.id_sensor=ds.id_sensor
WHERE ds.id_data IN(
SELECT MAX(id_data)
FROM data_sensor
GROUP BY id_sensor
)
");

while($n=mysqli_fetch_assoc($q)){

$status="";

switch(strtolower($n['nama_sensor'])){

case "suhu":

if($n['nilai']>35){

$status="🔥 Suhu terlalu tinggi";

}

break;

case "kelembaban":

if($n['nilai']<40){

$status="💧 Kelembaban rendah";

}

break;

case "ph":

if($n['nilai']<6){

$status="🧪 pH terlalu asam";

}elseif($n['nilai']>7.5){

$status="🧪 pH terlalu basa";

}

break;

}

if($status!=""){

?>

<li class="list-group-item">

<?= $status ?>

<b>

(<?= $n['nilai']." ".$n['satuan']; ?>)

</b>

</li>

<?php

}

}

?>

</ul>

</div>

</div>

</div>

</div>