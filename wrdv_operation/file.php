<?php
// Folder making
// $curdir = getcwd();

// if(mkdir("newfile","0777")){

// 	echo "new directory is created . ";
// }
// else 
// 	echo "Failed to create directory";

// folder remove 
// $remove= rmdir('newfolder');
// var_dump($remove);

// file create
// $file_name = fopen("newfile.txt",'w') or 
// die('your file is not created !');

// $containt= "hello enam you are so early .";

// // $result = file_put_contents($file_name,$containt) or die ('contint write can not on text file .');
// $result = fopen('newfile.txt','r',) or die('can not write this containt in txt file .');
// echo fread($result, filesize('newfile.txt'));
// fclose($file_name);

$file_name = 'newfile/newfile.txt';
// $containt = 'Hay you are so ugly(^ ^)';
// // add second line contaion
// $containt_second = "This is not good this Behaviour";
// $result =file_put_contents($file_name, $containt);
// $result_two = file_put_contents($file_name,$containt_second,FILE_APPEND);

// var_dump($result_two);

// read file containt
$read = file_get_contents($file_name);
echo $read;

// file delete

// $file_name='newfile.txt';
// $delete = unlink($file_name);
// var_dump($delete);