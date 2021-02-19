
// MYSQLi Prepared Statement with Variable in php.

<?php

$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
	echo "Connection Fail.....";
	exit();
}else{
	echo "Connection Successfull...";
}


$sql = "insert into tbl_user(name, email, skill) values(?,?,?)";

$stmt = $db->prepare($sql);
$stmt->bind_param("sss",$name, $email, $skill);

$name = "Arifull Islam";
$email = "ariful@gmail.com";
$skill = "Blogger";
$stmt->execute();
$stmt->close();
$db->close();

?>