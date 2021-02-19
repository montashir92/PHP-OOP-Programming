
// PHP OOP constructors And Destructors methods.

<?php

class UserData{
    
    public $user;
    public $userId;
    
    public function __construct($userName, $userId){
        $this->user = $userName;
        $this->userId = $userId;
        
        echo "User name is {$this->user} and user id is {$this->userId}";
    }
    public function __destruct(){
        unset($this->user);
        unset($this->userId);
    }
    
}
$user = "Montashir Billah";
$id = "25";
$ur = new UserData($user, $id);

?>