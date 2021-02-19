
//Magic Methods __Get($property).

<?php

//Magic Methods

/*

--get($property)
--set($property, $value)
--call($method, $arg_array)

*/

class Student{
    
    public $name;
    
    public function descride(){
        echo "I am a Student <br/>";
    }
    
    public function __get($pm){
        echo "$pm does not exist. <br/>";
    }
}


$st = new Student();
$st->descride();
$st->Montashir;

?>

//Magic Methods __Set($pm, $value).

<?php

//Magic Methods

/*

--get($property)
--set($property, $value)
--call($method, $arg_array)

*/

class Student{
    
    public $name;
    
    public function descride(){
        echo "I am a Student <br/>";
    }
    
    public function __get($pm){
        echo "$pm does not exist. <br/>";
    }
    public function __set($pm, $value){
        echo "We set $pm->$value";
        
    }
}


$st = new Student();
$st->descride();
$st->Montashir;
$st->age = 15;

?>

//Magic Methods __call().

<?php

//Magic Methods

/*

--get($property)
--set($property, $value)
--call($method, $arg_array)

*/

class Student{
    
    public $name;
    
    public function descride(){
        echo "I am a Student <br/>";
    }
    
    public function __get($pm){
        echo "$pm does not exist. <br/>";
    }
    public function __set($pm, $value){
        echo "We set $pm->$value";
        
    }
    public function __call($pm, $value){
       echo "There is no <b>".$pm. " </b> method and Argumants:" .implode(', ', $value);
    }
}


$st = new Student();
$st->descride();
$st->Montashir;
$st->age = 15;

$st->notexistMethod('2', '5', '8');
?>