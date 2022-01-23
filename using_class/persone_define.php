<?php
require "person.php";

$person = new person();
$person->name = 'Enamul';
$person->getName();
// age 
echo "<br>";
$person->age ='22';
$person->geAge();