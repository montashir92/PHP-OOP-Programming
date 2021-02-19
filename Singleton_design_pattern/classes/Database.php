
//Singleton Design Pattern.

<?php

 class Database{
	
	private static $instance;
	public function __construct(){
		if(!self::$instance){
			self::$instance = $this;
			echo "Created New one. <br/>";
			return self::$instance;
		}else{
			echo "Old one Instance. <br/>";
			return self::$instance;
		}
		
	}
	
}

?>