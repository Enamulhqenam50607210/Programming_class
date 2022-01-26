<?php 
class db{
	private $host = 'localhost';
	private $db_usr = 'Enam';
	private $db_pass = '@ranzhyfx';
	private $db_name = 'personal_wallate_manager';
	private $connection ;
	// যেহেতু আমাদের ক্লাসকে কল করার সাথে সেথে সেটি কাজ করবে আমরা জানি construct method কে Object বানানোর সাথে সাথে কাজ করে, তাই মআরা এখানে  construct method কল করেছি  
	public function __construct()
	{
		$this->connection = new mysqli($this->host,$this->db_usr,$this->db_pass,$this->db_name);

		if($this->connection->connect_errno){
			throw new Exception('Database connection is erroo & error code is : '.$this->connection->connect_errno);

			exit();
		}
		else 
		{
			return true;
		}
	}
	// এই টেবিলটি তে insert , update এই কুয়েরি গুলো পাসস করব 
	public function execute($query)
	{
		$result = mysqli_query($this->connection,$query);

		if(!$result){
			throw new Exception('Error executing query');
		}
		else{
			return ture;
		}
	}
	// এই function এ পাস করবে শুধু select query গুলো 
	public function fetch_result($query)
	{

		$result = mysqli_query($this->connection , $query);

		if($result)
		{
			while ($row = mysqli_fetch_array($result))
			{
				$data[]=$row;
			}
			return $data;
		}
		else{
			return array();
		}
	}
	public function close()
	{
		$this->connection->close();
	}
}


// $DB = new db() ;

// 	try {
// 		$DB->fetch_result = "INSERT INTO income_cetagory (name) values ('monthly selary')";
// 	} catch (Exception $error) {
// 		echo $error->getmassage();
// 	}
?>