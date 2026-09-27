<div class="row mt-4">

<div class="col-lg-12">

<div class="card shadow border-0 rounded-4">

<div class="card-header bg-warning text-dark">

<h5 class="mb-0">

<i class="fa-solid fa-sliders"></i>

Quick Control

</h5>

</div>

<div class="card-body">

<div class="row">

<?php while($a=mysqli_fetch_assoc($aktuator)): ?>

<div class="col-lg-3 col-md-6 mb-3">

<div class="border rounded-4 p-3 text-center">

<?php

$nama = strtolower(trim($a['nama_aktuator']));
$icon = "fa-toggle-off";

switch($nama){

    case "pompa":
    case "pompa air":
        $icon = "fa-faucet";
        break;

    case "kipas":
        $icon = "fa-fan";
        break;

    case "lampu":
    case "light":
        $icon = "fa-lightbulb";
        break;

    case "sprinkler":
        $icon = "fa-shower";
        break;
}
?>
<i class="fa-solid <?= $icon ?> fa-3x text-success"></i>

<h5 class="mt-3">

<?= $a['nama_aktuator']; ?>

</h5>

<div class="form-check form-switch d-flex justify-content-center mt-3">

<input
class="form-check-input switchAktuator"
type="checkbox"

data-id="<?= $a['id_aktuator']; ?>"

<?= $a['status']=="ON" ? "checked":""; ?>

>

</div>

<p class="mt-2">

<?= $a['status']; ?>

</p>

</div>

</div>

<?php endwhile; ?>

</div>

</div>

</div>

</div>

</div>

<script>

function relayON(){

fetch("../api/update_relay.php",{

method:"POST",

headers:{
"Content-Type":"application/x-www-form-urlencoded"

},

body:"status=ON"

});

}

function relayOFF(){

fetch("../api/update_relay.php",{

method:"POST",

headers:{
"Content-Type":"application/x-www-form-urlencoded"

},

body:"status=OFF"

});

}

</script>