
// BLOG With Prepared Statement in php.

<?php

$db = new mysqli("localhost","root","","mon");

if(mysqli_connect_errno()){
	echo "Connection Fail.....";
	exit();
}else{
	echo "Connection Successfull...";
}


$sql = "insert into images(image) values(?)";
$stmt = $db->prepare($sql);
$stmt->bind_param("b",$image);
$image=file_get_contents("me.jpg");
$stmt->send_long_data(0, $image);
$stmt->execute();

?>

//Example of BLOG With Prepared Statement in php.


<?php



$db = new mysqli("localhost","root","","mon");

if(mysqli_connect_errno()){
	echo "Connection Fail.....";
	exit();
}else{
	echo "Connection Successfull...";
}

$sql = "select image from images where id=?";
$stmt = $db->prepare($sql);
$stmt->bind_param('i', $id);
$id = 1;
$stmt->execute();
$stmt->bind_result($image);
$stmt->fetch();
header("content-type: jpg");
echo '<img src="data:image/jpg;base64, '.base64_encode($image).'">';

?>