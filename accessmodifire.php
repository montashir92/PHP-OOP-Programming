
//Access Modifiers.

<?php
//public
//private
//protected

class UserData{
    
    public $user;
    public $userId;
    public $age = "25";
    
    public function __construct($userName, $userId){
        $this->user = $userName;
        $this->userId = $userId;
        
    }
    
    public function display(){
        echo "User name is {$this->user} and user id is {$this->userId}";
        echo "<br/>";
        echo $this->age. " Inside Class";
    }
    
    
}

class Admin extends UserData{
    public $level;
    public function display(){
        echo "User name is {$this->user} and user id is {$this->userId} and User Level is {$this->level}";
        echo "<br/>";
        echo $this->age. " In the sub Class";
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

//Private Use of methods.

<?php
//public
//private
//protected

class UserData{
    
    public $user;
    public $userId;
    private $age = "25";
    
    public function __construct($userName, $userId){
        $this->user = $userName;
        $this->userId = $userId;
        
    }
    
    public function display(){
        echo "User name is {$this->user} and user id is {$this->userId}";
        echo "<br/>";
        echo $this->age. " Inside Class";
    }
    
    
}

class Admin extends UserData{
    public $level;
    public function display(){
        echo "User name is {$this->user} and user id is {$this->userId} and User Level is {$this->level}";
        echo "<br/>";
        echo $this->age. " In the sub Class";
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

//Do not Access outside Protected Use of Access Modifiers.

<?php
//public
//private
//protected

class UserData{
    
    public $user;
    public $userId;
    protected $age = "25";
    
    public function __construct($userName, $userId){
        $this->user = $userName;
        $this->userId = $userId;
        
    }
    
    public function display(){
        echo "User name is {$this->user} and user id is {$this->userId}";
        echo "<br/>";
        echo $this->age. " Inside Class";
    }
    
    
}

class Admin extends UserData{
    public $level;
    public function display(){
        echo "User name is {$this->user} and user id is {$this->userId} and User Level is {$this->level}";
        echo "<br/>";
        echo $this->age. " In the sub Class";
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
echo "<br/>";
echo $ur->age;
?>

