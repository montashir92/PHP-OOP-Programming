
//Late Static Binding in php.

<?php
     class Php{
        public static function framework(){
            echo "CheckPhp is a framework <br/>";	
        }
		
		public function getFramework(){
			self::framework();
		}
    }
?>

//Example-1 of Late Static Binding in php.

<?php
     class Php{
        public static function framework(){
            echo static::getClass()."<br/>";	
        }
		
		public static function getClass(){
			return __CLASS__;
		}
    }
?>