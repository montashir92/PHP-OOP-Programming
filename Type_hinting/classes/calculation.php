
//Type hinting in php.

<?php
class Calculation{
	
	
	public function getValue(array $x){
		foreach($x as $value){
			echo $value[0];
			echo " : ";
			echo $value[1]*$value[2]."<br/>";
			
		}
		
	}
	
}

?>