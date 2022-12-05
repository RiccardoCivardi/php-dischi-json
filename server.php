<?php 

$string = file_get_contents('dischi.json');

$disks = json_decode($string, true);








// alla fine stampo sempre un json del mio array
header('Content-type: application/json');
echo json_encode($disks);