<?php

include "../config.php";

$status = $_POST['status'];

mysqli_query($conn,"
UPDATE kontrol_relay
SET status='$status'
WHERE relay='Pompa'
");

echo "OK";

?>