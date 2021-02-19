
//PHP OOP Destructor.

<?php
class Person{
    public $name;
    public $age;
    public $id;
    
    public function __construct($name, $age){
       $this->name = $name;
        $this->age = $age;
    }
   public function setId($id){
       $this->id = $id;
   }
    public function __destruct(){
        if(!empty($this->id)){
            echo "Saving Person";
        }
    }
  
}
$personOne = new person("Montashir Billah", "25");

$personOne->setId(12);
unset($personOne);
?>