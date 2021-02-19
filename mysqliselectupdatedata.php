
//MYSQLi Selcet Update Data in php.

<?php

$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
	echo "Connection Fail.....";
	exit();
}else{
	echo "Connection Successfull...";
}


$sql = "select * from tbl_user";
$result = $db->query($sql);
while($data = $result->fetch_object()){
	echo "<pre>";
	echo $data->skill;
	echo "<pre>";
}

?>

//Example if MYSQLi Select Update data in php.

<?php

$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
	echo "Connection Fail.....";
	exit();
}else{
	echo "Connection Successfull...";
}


$sql = "update tbl_user SET skill='design, php' where id='1'";
$result = $db->query($sql);

?>