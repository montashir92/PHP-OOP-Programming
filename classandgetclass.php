
//CLASS and get Class Methods.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


class phpChild extends Php{
	public function cms(){
			echo "Child Class Constant and class name-> " .__CLASS__. "<br/>";
			echo "Child Class function and class name-> " .get_class($this). "<br/>";
			
		}
}

$php = new phpChild();
$php->framework();
echo "<hr/>";
$php->cms();

?>

//Example of class and get_class methods.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


class phpChild extends Php{
	public function cms(){
			echo "Child Class Constant and class name-> " .__CLASS__. "<br/>";
			echo "Child Class function and class name-> " .get_class($this). "<br/>";
			
		}
	public function ourMethod(){
		parent::framework();
	}
}

$php = new phpChild();
$php->framework();
echo "<hr/>";
$php->cms();
echo "<hr/>";
$php->ourMethod();

?>