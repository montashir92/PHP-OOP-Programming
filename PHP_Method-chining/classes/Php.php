//php methods chaining.

<?php
    class Php{
        public function framework(){
            echo "CheckPhp is a framework <br/>";
        }
		
		public function cms(){
			echo "Wordpress is a cms.";
		}
    }
?>

//Example of php methods chaining.

<?php
    class Php{
        public function framework(){
            echo "CheckPhp is a framework <br/>";
			return $this;
        }
		
		public function cms(){
			echo "Wordpress is a cms.";
			return $this;
		}
    }
?>



