
//Static propertics & Methods.

<?php

class UserData{
    
    public $user;
    public $userId;
    const NAME ="Montashir Billah";
    public static $age = "30";
    
    public function __construct($userName, $userId){
        $this->user = $userName;
        $this->userId = $userId;
        
        echo "User name is {$this->user} and user id is {$this->userId}";
    }
    
    public static function display(){
        echo "Full Name is : ".UserData::NAME."<br/>";
        echo "Age is : ".self::$age;
    }
    
    
    public function __destruct(){
        unset($this->user);
        unset($this->userId);
    }
    
}
$user = "Montashir Billah";
$id = "25";
$ur = new UserData($user, $id);
echo "<br/>";
UserData::display();

?>