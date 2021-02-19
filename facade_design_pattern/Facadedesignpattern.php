
//Facade Design Pattern in PHP.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


$fa = new Facade();
$fa->findApartments("jatrabari, Dhaka", "mapdiv");


?>