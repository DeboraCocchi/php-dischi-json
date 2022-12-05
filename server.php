<?php

if (is_file('../debugger.php')) {
  include '../debugger.php';
}


$disksStr=file_get_contents('db.json');
$disks=json_decode($disksStr, true);



header ('Content-Type:application/json');
echo json_encode($disks);