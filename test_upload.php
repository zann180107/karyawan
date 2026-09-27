<!DOCTYPE html>
<html>
<head>
    <title>Test Upload Sensor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h3>Test Upload Sensor ESP32</h3>

<form action="api/upload_sensor.php" method="POST">

<div class="mb-3">
<label>Nama Device</label>
<input type="text" class="form-control" name="device" value="ESP32-01">
</div>

<div class="mb-3">
<label>Suhu (°C)</label>
<input type="number" step="0.1" class="form-control" name="suhu" value="29.5">
</div>

<div class="mb-3">
<label>Kelembaban (%)</label>
<input type="number" step="0.1" class="form-control" name="kelembaban" value="65">
</div>

<div class="mb-3">
<label>pH</label>
<input type="number" step="0.1" class="form-control" name="ph" value="6.8">
</div>

<button class="btn btn-success">
Kirim Data Sensor
</button>

</form>

</body>
</html>