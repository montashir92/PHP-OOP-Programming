
//PHP Object Serialization.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


$pro = new Programming();
$ser = serialize($pro);
file_put_contents("programming.txt", $ser);
echo $ser;

?>

//Example of PHP Object Unserilaze.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


$pro = new Programming();
$ser = serialize($pro);
/*
file_put_contents("programming.txt", $ser);
echo $ser;
*/

$getcont = file_get_contents("programming.txt");
$unser = unserialize($getcont);
echo "<pre>";
print_r($unser);
echo "</pre>";



?>