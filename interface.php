
//Interface.

<?php

//Interface

interface School{
    public function mySchool();
}

class Teacher implements School{
    public function __construct(){
     $this->mySchool();   
    }
    
    public function mySchool(){
        echo "I am a school teacher.";
    }
}

$teacher = new Teacher();

?>

// More Interface Example.

<?php

//Interface

interface School{
    public function mySchool();
}

interface College{
    public function myCollege();
}

interface Versity{
    public function myVersity();
}

class Teacher implements School, College, Versity{
    public function __construct(){
     $this->mySchool();   
     $this->myCollege();   
     $this->myVersity();   
    }
    
    public function mySchool(){
        echo "I am a school teacher. <br/>";
    }
    
    public function myCollege(){
        echo "I am a College teacher. <br/>";
    }
    
    public function myVersity(){
        echo "I am a Varsity teacher. <br/>";
    }
}

$teacher = new Teacher();

?>

// More Interface Example.

<?php

//Interface

interface School{
    public function mySchool();
}

interface College{
    public function myCollege();
}

interface Versity{
    public function myVersity();
}

class Teacher implements School, College, Versity{
    public function __construct(){
     $this->mySchool();   
     $this->myCollege();   
     $this->myVersity();   
    }
    
    public function mySchool(){
        echo "I am a school teacher. <br/>";
    }
    
    public function myCollege(){
        echo "I am a College teacher. <br/>";
    }
    
    public function myVersity(){
        echo "I am a Varsity teacher. <br/>";
    }
}

class Student implements School, College, Versity{
    public function __construct(){
     $this->mySchool();   
     $this->myCollege();   
     $this->myVersity();   
    }
    
    public function mySchool(){
        echo "I am a school Student. <br/>";
    }
    
    public function myCollege(){
        echo "I am a College Student. <br/>";
    }
    
    public function myVersity(){
        echo "I am a Varsity Student. <br/>";
    }
}

$teacher = new Teacher();
$student = new Student();

?>