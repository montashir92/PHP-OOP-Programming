
//BindValue and BindParam in php.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}

$name = "Ivan Habib pro";
$mail = "ivan@gmail.com";
$skill = "Blogger";
$age = 19;


$sql = "insert into tbl_user(name, email, skill, age) values(:name, :email, :skill, :age)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $mail);
$stmt->bindValue(':skill', $skill);
$stmt->bindValue(':age', 19);
$stmt->execute();

?>

//Example of BindValue and BindParam in php.

<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}

$name = "Akber Hossain";
$mail = "akber@gmail.com";
$skill = "JAVA";
$age = 20;


$sql = "insert into tbl_user(name, email, skill, age) values(:name, :email, :skill, :age)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $mail);
$stmt->bindValue(':skill', $skill);
$stmt->bindValue(':age', $age);
$stmt->execute();

?>