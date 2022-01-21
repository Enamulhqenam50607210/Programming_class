<?php
class person
{
   public $name;
   public $age;
   public $religion;

   function _construct()
   {
       echo $name;
   }
   public function getName(){
       echo $this->name;
   }
   public function geAge(){
       echo $this->age;
   }
   public function getReligion(){
        echo $this->religion;
   }
}