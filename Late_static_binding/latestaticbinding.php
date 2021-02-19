
//Late Static Binding in php.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


$php = new Php;
$php->getFramework();


?>

//Example-1 of Late Static Binding in php.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


class phpChild extends Php{
	public static function getClass(){
			return __CLASS__;
		}
}
$php = new Php;
$php->framework();

$phpchild = new phpChild();
$phpchild->framework();

?>