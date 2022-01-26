<?php 
	include('libs/db.php');
	include('libs/class.income_category.php');

	$IncomeCategory = new income_category();

	if(isset($_POST['submit'])&& $_POST['submit']== 'add Income Cetagory')
	{
		$data = ['name' => $_POST['name'] ];

		try {
			$IncomeCategory->create($data);
			
		} catch (Exception $error) {
			echo $error->getMessage();
		}
	}

	$IncomeCategories = $IncomeCategory->get_all();
	// $IncomeCategorys = $IncomeCategory->get_all();
?>


<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>income catagory</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

 	
	 	<label>write cetagory </label>
	 	<input type="text" name="name" placeholder="write income cetagory ." required>
	 	<input type="submit" name="submit" value="add Income Cetagory">

	 </form>

	 <table>
	 	<thead>
	 		<tr>
	 			<th>ID</th>
	 			<th>Name</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php foreach ($IncomeCategories as $Category) {?>
	 		<tr>
	 			<td> <?php echo $Category['id'] ; ?></td>
	 			<td> <?php echo $Category['name'] ; ?></td>
	 			<td>
	 				<a href="<?php echo $_SERVER['PHP_SELF'].'?id='.$Category['id'] ?>">Edit</a>
	 				<a href="<?php echo $_SERVER['PHP_SELF'] ?>">Delete</a>
	 			</td>
	 		</tr>

	 		<?php } ?><!-- end foreach loop  -->
	 	</tbody>
	 </table>

 </body>
 </html>