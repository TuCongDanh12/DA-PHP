<?php
include('designpattern.php');
$Device1 = DeviceFactory::create('thietbi', 'abc');
echo $Device1->getNameandInfor ();
?>