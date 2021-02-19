
//PDO PHP Data Object.

<?php


$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}

$sql = "select * from tbl_user";
$result = $pdo->query($sql);
foreach($result as $value){
	echo $value['skill']."<br/>";
}

?>