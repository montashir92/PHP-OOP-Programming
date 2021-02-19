
//Autoloading Classes Methods.

<?php
include "classes/Ruby.php";
include "classes/Java.php";
include "classes/Php.php";



$ruby = new Ruby;
$java = new Java;
$php  = new Php;
?>

//Example 1.

<?php

function __autoload($class_name){
    echo "$class_name <br/>";
    include "classes/".$class_name. ".php";
}



$ruby = new Ruby;
$java = new Java;
$php  = new Php;
?>

//Example 2.

<?php

function __autoload($class_name){
  
    include "classes/".$class_name. ".php";
}



$ruby = new Ruby;
$java = new Java;
$php  = new Php;
?>

//Very Popular is the methods.

<?php
spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});




$ruby = new Ruby;
$java = new Java;
$php  = new Php;
?>