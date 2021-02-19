
// Magic Methods clone.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});

	$java = new Language();
	$java->setCat("OOP");
	$java->setFramework("Spring");

	$php = clone $java;
	$php->setFramework("CodeIgniter");

	echo $java->getCat()."<br/>";
	echo $java->getFramework()."<br/>";

	echo $php->getCat()."<br/>";
	echo $php->getFramework();
?>