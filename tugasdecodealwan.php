<?php
$priceobj= '{"Sepeda Listrik":750000,"Motor Listrik":4000000,"Mobil Listrik":30000000}';

$obj = json_decode($priceobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;

?>
