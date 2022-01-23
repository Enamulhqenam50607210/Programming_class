<?php 

$data=40;
$type = gettype($data);
// var_dump($type);
$type == 'integer' ? $value ='Integer value ' : $value = 'Not integer value'; 
echo $value ;
echo "\n";

// $eligibal = true;
// $has_credit = false;

// $message = $eligibal ? ($has_credit ? 'Can use credit':'not enough credit'):'not eligibole to buy ';
// echo $message;

$test=10;
$type = gettype($test);
$type == "string" ? $result ="it's string": $result = "input value is not string";
echo $result;
echo "\n";
$floate_number =12.05;
$test = gettype($floate_number);
// var_dump($test);
$test == 'double'? $see_number='input valu is floate': $see_number ='input valu is not a floate ';

print $see_number;