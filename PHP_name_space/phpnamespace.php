
//PHP Name Space.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});


new Ruby();
new Php();
new Java();

?>

//Example of PHP Name Space.

<?php

include "classes/Java.php";
include "classes/php.php";
include "classes/Ruby.php";

new montashir\live\Ruby();
new bangladesh\Php();
new montashir\Java();

?>

//Example of PHP Name Space.

<?php
/*
spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});
*/

include "classes/Java.php";
include "classes/php.php";
include "classes/Ruby.php";

use montashir\live\Ruby as ru;
new montashir\live\Ruby();
new bangladesh\Php();
new ru();

?>

//Example of PHP Name Space.

<?php

include "classes/Java.php";
include "classes/php.php";
include "classes/Ruby.php";

use montashir\live\Ruby as ru;
new montashir\live\Ruby();
new bangladesh\Php();
new ru();
echo HTML;
echo montashir\CSS;
montashir\coding();
?>

