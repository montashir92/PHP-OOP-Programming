
// OOP Constructor Methods.

<?php
class Person{
    public $name;
    public $age;
    
    public function __construct($name, $age){
       $this->name = $name;
        $this->age = $age;
    }
    public function personDetails(){
       echo "Person Name is {$this->name} and Person Age is {$this->age}";
    }
  
}
$personOne = new person("Montashir Billah", "25");
$personOne->personDetails();


?>
