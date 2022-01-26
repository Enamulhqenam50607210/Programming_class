<?php 
	// include('libs/con.db.inc');
	include('libs/db.php');
	include('libs/class.income_category.php');

	$IncomeCategory= new income_category();

	$data = ['name' => 'Monthly selary'];

	try {
		$IncomeCategory->create($data);
	} catch (Exception $error) {
		echo $error->getMessage();
	}

	
	// try {
	// 	$DB = new db() ;
	// } catch (Exception $error) {
	// 	echo $error->getmassage();
	// }

 ?>
 html:<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>income catagory</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<label>write cetagory </label>
 	<input type="text" name="name" placeholder="write income cetagory ." required>
 	<input type="submit" name="submit">

 </body>
 </html>