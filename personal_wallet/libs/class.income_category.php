<?php 

	class income_category
	{
		private $name;
// create 
		public function create($data)
		{
			$this->name = $data['name'];

			// var_dump($data);

			 $query ="INSERT INTO income_cetagory (name)";
			 $query.=" VALUES('$this->name')";

			$DB = new db(); 

			$DB->execute($query); // we will pass $query of number 11 and 12 line $query .
			 $DB->close();
		}

// update
		public function update($data,$id)
		{

		}
// delete_all
		public function delete()
		{

		}
// delete using primary key 
		public function delete_by_pk($id)
		{

		}
// show all table's dabat 
		public function get_all()
		{
			$query = "SELECT * FROM `income_cetagory` " ;

			$DB = new db();

			$result= $DB->fetch_result($query);

			$DB->close();

			return $result;
		}
// show table's data using by primary key 
		public function get_by_pk($id)
		{

		}
	}
?>