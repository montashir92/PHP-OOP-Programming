
//Inheritance.

<?php

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
$user = "Admin";
$id = "1";
$ad = new Admin($user, $id);
$ad->level = "Administrator";
$ad->display();
?>