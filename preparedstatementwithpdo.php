
// Prepared Statement with PDO in php.

<?php


$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}

$name = "Hamid  Khan";
$mail = "hamidkhan@gmail.com";
$skill = "PHP";
$age = 30;


$sql = "insert into tbl_user(name, email, skill, age) values(:name, :email, :skill, :age)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $mail);
$stmt->bindParam(':skill', $skill);
$stmt->bindParam(':age', $age);
$stmt->execute();

?>

// Example of Prepared Statement with PDO in php.

<?php


$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo "Connection Fail..".$e->getMessage();
}

$name = "Himel Islam";
$mail = "himel@gmail.com";
$skill = "Blogger";
$age = 25;

$sql = "insert into tbl_user(name, email, skill, age) values(?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$arr = array($name, $mail, $skill, $age);
$stmt->execute($arr);

?>