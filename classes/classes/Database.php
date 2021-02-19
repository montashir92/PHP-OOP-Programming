<?php

abstract class Database{
	
	public function connect();
	public function query();
	public function insertId();
	
	public function setHost($host){
		//Set Database here...
	}
	
	public function setDB($db){
		//Set Database here...
	}
	
	public function setUser($ser){
		//Set User Name...
	}
	
	public function setPass($pass){
		//Set Password...
	}
	
}

?>