
// Update Delete Data With PDO Statement.

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
$skill = "JAVA, PHP, Physics";

$sql = "update tbl_user set skill=? where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($skill, $id));

?>

//Example of Update Delete Data With PDO Statement.

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
$skill = "JAVA, PHP";

$sql = "update tbl_user set skill=:skill where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':skill', $skill);
$stmt->bindParam(':id', $id);
$stmt->execute();

?>

//Example of Update Delete Data With PDO Statement.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}


$id = 10;
$skill = "JAVA";

$sql = "update tbl_user set skill=:skill where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':skill', $skill);
$stmt->bindValue(':id', $id);
$stmt->execute();

?>

//Example of Update Delete Data With PDO Statement.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}


$id = 10;

$sql = "delete from tbl_user where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($id));

?>

//Example of Update Delete Data With PDO Statement.

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

$sql = "delete from tbl_user where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

?>

//Example of Update Delete Data With PDO Statement.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}


$id = 13;

$sql = "delete from tbl_user where id=?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $id);
$stmt->execute();

?>

//Example of Update Delete Data With PDO Statement.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}

$id = 12;

$sql = "delete from tbl_user where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

?>
