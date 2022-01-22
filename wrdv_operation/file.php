<?php

$curdir = getcwd();

if(mkdir("./newfile","0777")){

	echo "new directory is created . ";
}
else 
	echo "Failed to create directory";

