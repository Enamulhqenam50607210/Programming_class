<?php 
 class tree{
	public $mango_tree;
	public $apple_tree;
	public $orange_tree;
	public $lemon_tree;

	 function setMango_tree($mango_tree){
		$this->mango_tree=$mango_tree;
	}
	 function getMango_tree(){
		echo $this->mango_tree;
	}

	 function setApple_tree($appel_tree){
		$this->apple_tree=$apple_tree;
	}
	 function getApple_tree(){
		echo $this->apple_tree;
	}
	 function setOrange_tree($orange_tree){
		$this->orange_tree=$orange_tree;
	}
	 function getOranger_tree(){
		echo $this->orange_tree;
	}
	 function setLemon_tree($lemon_tree){
		$this->lemon_tree=$lemon_tree;
	}
	 function getLemon_tree(){
		echo $this->lemon_tree;
	}
}
/**
 *
 */
class flower_tree extends tree
{
	public $laburnum;
	public $pride;
	public $kachar;
	public $flame;

	function setLaburnum($laburnum){
		$this->laburnum=$laburnum;
	}
	function getLaburnum(){
		echo $this->laburnum;
	}
	function setPride($pride){
		$this->pride=$pride;
	}
	function getPride(){
		echo $this->pride;
	}
	function setKachar($kachar){
		$this->kachar=$kachar;
	}
	function getKachar(){
		echo $this->kachar;
	}
	function setFlame($flame){
		$this->flame=$flame;
	}
	function getFlame(){
		echo $this->flame;
	}

}
$obj_tree = new flower_tree();
$obj_tree->setMango_tree('Fojli_mango');

$obj_tree->getMango_tree();
echo "<br>";
$obj_tree->setFlame('niceflower');
$obj_tree->getFlame();


 ?>