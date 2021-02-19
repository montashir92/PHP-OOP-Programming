
//MYSQL Connect OO Way in php.

<?php

$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
	echo "Connection Fail.....";
	exit();
}else{
	echo "Connection Successfull...";
}

?>