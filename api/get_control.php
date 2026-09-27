<?php

include "../config.php";

$query = mysqli_query($conn,"
SELECT status
FROM kontrol_relay
WHERE relay='Pompa'
LIMIT 1
");

$data = mysqli_fetch_assoc($query);

echo $data['status'];

?>