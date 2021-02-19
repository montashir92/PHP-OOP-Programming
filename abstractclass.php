
//Abstract Class.

<?php

//Abstract Class

class Student{
    
    public $name;
    public $age;
    
    public function details(){
        echo $this->name. " is " .$this->age . " years old";
    }
}

$s = new Student();
$s->name = "Montashir";
$s->age = "25";
$s->details();
?>

//Abstract Class Example.

<?php

//Abstract Class

abstract class Student{
    
    public $name;
    public $age;
    
    public function details(){
        echo $this->name. " is " .$this->age . " years old <br/>";
    }
    abstract public function school();
}

class Boy extends Student{
    public function descride(){
        return parent::details(). "And i am a high school student <br/>";
    }
    
    public function school(){
        return "I like read story book.";
    }
}


$s = new Boy();
$s->name = "Montashir";
$s->age = "25";
echo $s->descride();
echo $s->school();
?>