
//Stategy Design Pattern in php.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});

$user = new User();
$msg = $user->getMsg();
switch($msg){
	case 'email':
	$objMsg = new SendEmail();
	break;
	
	case 'sms':
	$objMsg = new SendSms();
	break;
	
	case 'fax':
	$objMsg = new SendFax();
	break;
	
	
}
$objMsg->notification();
?>