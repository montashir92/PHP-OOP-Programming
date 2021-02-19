
//Class & Methods existance.

<?php
include "header.php"; 
include "student.php"; 
?>


<?php
if(class_exists("Student")){
$st = new Student();
$st->descride();
}else{
    echo "Class not found";
}
?>

//will be write here student.php file.

<?php


class Student{
    
    
    public function descride(){
        echo "Student class exists";
    }
}
 


?>

//Class & Methods existance example.

<?php   

if(class_exists("Student")){
$st = new Student();
    if(method_exists($st, "descride")){
$st->descride();
}else{
        echo "Method not found";
    }
}else{
    echo "Class not found";
}
?>

//will be write here student.php file.

<?php


class Student{
    
    
    public function descride(){
        echo "descride Methods exists";
    }
}
 


?>