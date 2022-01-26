<?php


?>


<!DOCTYPE html>
<html>
<head>
	<title>Operation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<h1>Php Operation</h1>
<div class="operation">
	<div class="make_folder">

		<label>Make a folder</label>

		<input type="text" name="folder_name" placeholder="Write a folder name " class="folder_make">

		<input type="submit" value ="Folder Make" name="btn" class="folder_btn">
	</div>
	<div class="make_file">
		<label>Make a File </label>

		<input type="text" name="make_file" placeholder="write a file name " class="makefile">

		<input type="submit" value ="File Make" name="btn" class="file_btn">
	</div>
	<div class="write_txt">
		<label>Write containt </label>

		<input type="text" name="write_txt" placeholder="write containe on file " class="writecontain">

		<input type="submit" value ="submit" name="btn" class="write_btn">

	</div>
	<div class="read_txt">
		<label>View file containt</label>
		<input type="text" name="read_txt" placeholder="write a file name and view containt . " class="readcontint">
		<input type="submit" value ="View Containt" name="btn" class="read_btn">
	</div>
	<div class="delete_txt">
		<label>Delete a file </label>
		<input type="text" name="delete_txt" placeholder="delete you file ." class="deletefile" 
		>

		<input type="submit" value ="Delete file" name="delete_btn" class="delete-btn">
	</div>
	<div class="remove_folder">
		<label>Remove Folder</label>

		<input type="text" name="remove_folder" placeholder="remove your folder." class="removefolder">

		<input type="submit"  value ="Remove Folder" name="rm_folder" class="rm_folder">
	</div>
</div>
</body>
</html>
