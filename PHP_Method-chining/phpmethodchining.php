//PHP Methods chaining.

<?php
spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


$php  = new Php;
$php->framework();
$php->cms();
?>

//Example of php methods chaining

<?php
spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


$php  = new Php;
$php->framework()->cms();

?>

//Example of php chaining methods.

<?php
spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


$cal = new Calculation;
echo "Result is: ".$cal->getValue(3,5)->getResult();


?>