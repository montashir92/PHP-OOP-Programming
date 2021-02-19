
//Object Cloning in php.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});

$java = new Language();
$java->setCat("OOP");
$java->setFramework("Spring");
echo $java->getCat();

?>

//Exmaple-1 of Clonong in php.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});

$java = new Language();
$java->setCat("OOP");
$java->setFramework("Spring");

$php = clone $java;
$php->setCat("Structural");
$php->setFramework("CodeIgniter");

echo $java->getCat()."<br/>";
echo $java->getFramework()."<br/>";

echo $php->getCat()."<br/>";
echo $php->getFramework();
?>