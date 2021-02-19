
//Class Methods And Object.

<?php
class Person{
    public $name="Montashir Billah";
    public $age;

    public function PersonName(){
        
    }
    public function PersonAge(){
        
    }
    
}
$personOne  = new Person;
echo $personOne->name;

?>

// Second Step class Method and object.

<?php

class Person{
    public $name;
    public $age;

    public function PersonName(){
        echo "Person Name is : ".$this->name."<br/>";
    }
    public function PersonAge($value){
        echo "Person Age is : ".$this->age=$value;
    }
    
}
$personOne  = new Person;
$personOne->name="Montashir Billah";
$personOne->PersonName();


$personOne->PersonAge("25");

?>