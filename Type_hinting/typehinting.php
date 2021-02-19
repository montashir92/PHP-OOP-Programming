
//Type Hinting on php.

<?php
spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});



$cal = new Calculation;
$nums = array(
	array('Number one',10,10),
	array('Number two',20,20),
);
$cal->getValue($nums);

?>

//Example of type hinting in php.


<?php
spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


$php = new Php;
new Java($php);

?>