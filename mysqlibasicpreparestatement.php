
// MYSQLi Basic Prepare Statement in php.

<?php

$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
	echo "Connection Fail.....";
	exit();
}else{
	echo "Connection Successfull...";
}


$sql = "select name, skill from tbl_user order by id";
$stmt = $db->prepare($sql);
$stmt->execute();
$stmt->bind_result($name, $skill); 

while($stmt->fetch()){
	echo "$skill <br/>";
}

?>