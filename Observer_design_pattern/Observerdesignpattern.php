
// Observers Design Pattern in PHP.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


$obj = new Observable();
$sk = new Skype();
$gt = new Gtalk();
$s = new stdClass();
$obj->register($sk);
$obj->register($gt);
$obj->register($s);
$obj->stateChange();

?>