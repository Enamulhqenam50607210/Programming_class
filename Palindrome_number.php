<?php 
$palindrome_chrecter = 'noyon';

$reverse = strrev($palindrome_chrecter);
if($palindrome_chrecter==$reverse){
	echo $palindrome_chrecter." " . "is a palindrom";
}
else{
	echo $palindrome_chrecter." "."is not a palindrom";
}

 ?>