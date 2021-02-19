
// Select Data With PDO Prepared Satement.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}


$id = 1;

$sql = "select * from tbl_user where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute(array(':id' => $id));
while($data = $stmt->fetch()){
	echo "Name : ".$data['name']."<br/>";
	echo "Skill : ".$data['skill']."<br/>";
}

?>

//Example of Select Data With PDO Prepared Satement.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}


$id = 14;

$sql = "select * from tbl_user where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute(array(':id' => $id));
while($data = $stmt->fetch()){
	echo "Name : ".$data['name']."<br/>";
	echo "Skill : ".$data['skill']."<br/>";
}

?>

//Example of Select Data With PDO Prepared Satement.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}


$id = 1;

$sql = "select * from tbl_user where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($id));
while($data = $stmt->fetch()){
	echo "Name : ".$data['name']."<br/>";
	echo "Skill : ".$data['skill']."<br/>";
}

?>

//Example of Select Data With PDO Prepared Satement.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}


$id = 14;

$sql = "select * from tbl_user where id=?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $id);
$stmt->execute();
while($data = $stmt->fetch()){
	echo "Name : ".$data['name']."<br/>";
	echo "Skill : ".$data['skill']."<br/>";
}

?>

//Example of Select Data With PDO Prepared Satement.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}


$id = 2;
$skill  = "JAVA";

$sql = "select * from tbl_user where id=? and skill =?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $skill);
$stmt->execute();
while($data = $stmt->fetch()){
	echo "Name : ".$data['name']."<br/>";
	//echo "Skill : ".$data['skill']."<br/>";
}

?>

//Example of Select Data With PDO Prepared Satement.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}


$id = 1;

$sql = "select * from tbl_user where id=?";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $id);
$stmt->execute();
while($data = $stmt->fetch()){
	echo "Name : ".$data['name']."<br/>";
	echo "Skill : ".$data['skill']."<br/>";
}

?>

//Example of Select Data With PDO Prepared Satement.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}


$id = 14;

$sql = "select * from tbl_user where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
while($data = $stmt->fetch()){
	echo "Name : ".$data['name']."<br/>";
	echo "Skill : ".$data['skill']."<br/>";
}

?>