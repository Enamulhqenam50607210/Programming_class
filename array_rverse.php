<?php
$names = ['Enamul_hq','Ferdawus','Jahid','Shomiran','Jamal','Emon'];
$size = sizeof($names);
$sub_array1 =[];
$sub_array2 =[];
$new_array =[];
// ai loop use kore array k 2 vage vag korlam ai jonno size/2 dilam.. j hetu array index mene chole tia (-1) dolam
for ($i = $size/2-1; $i >=0 ; $i--){
    array_push($sub_array1,$names[$i]);
}
for ($j = $size -1 ; $j >=$size/2; $j--){
    array_push($sub_array2,$names[$j]);
}
// var_dump($sub_array1);
// var_dump($sub_array2);
array_push($new_array,$sub_array1);
array_push($new_array,$sub_array2);

print_r($names);
echo "<br>";
print_r($new_array);