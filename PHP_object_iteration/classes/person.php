
//PHP Object Iteration.

<?php
class Person{
	public $Name = "Montashir";
	public $Age = "24";
	public $Skill = "Developer";
	
	private $Email = "montashir92@gmail.com";
	protected $Password = "12345678";
	
	function iteratorInner(){
		echo "Inside Class <br/>";
		foreach($this as $key => $value){
			echo "<pre>";
			echo "$key=> $value";
			echo "<pre>";
		}
	}
	
}

?>