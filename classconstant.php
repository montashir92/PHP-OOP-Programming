
//Class constants.

<?php

class UserData{
    
    public $user;
    public $userId;
    const NAME ="Montashir Billah";
    
    public function __construct($userName, $userId){
        $this->user = $userName;
        $this->userId = $userId;
        
        echo "User name is {$this->user} and user id is {$this->userId}";
    }
    
    public function display(){
        echo "Full Name is : ".UserData::NAME;
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
$ur->display();

?>