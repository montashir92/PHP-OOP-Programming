//Polymorphism.

<?php
//Polymorphism
//When we start to extend classes, and add functionality to them which wasn't there proviously, and even override existing methods (function), this is call Polymorphism.
//The basic of Polymorphism is Inheritance and overridden methods.

class UserData{
    
    public $user;
    public $userId;
    
    public function __construct($userName, $userId){
        $this->user = $userName;
        $this->userId = $userId;
        
    }
    
    public function display(){
        echo "User name is {$this->user} and user id is {$this->userId}";
        
    } 
}
class Admin extends UserData{
    public $level;
    public function display(){
        echo "User name is {$this->user} and user id is {$this->userId} and User Level is {$this->level}";
        
    }   
}

$user = "Montashir Billah";
$id = "25";
$ur = new UserData($user, $id);
echo "<br/>";
$ur->display();
echo "<br/>";

$admin = new Admin("Amin", "01");
$admin->display();
echo "<br/>";
if($admin instanceof UserData){
    echo "inherited.";
}
?>