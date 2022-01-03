<!-- Inheritance -->
<!-- 

*What is Inheritance?
A: 
Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. 
In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword. 

*PHP overriding method
A:
Method overriding allows a child class to provide a specific implementation of a method already provided by its parent class.

-->
<?php 

    include "header.php";

?>

<section class="mainContent">

<?php
    class UserData{   // Its a super class/ parent class   // UserData is the class name   
                            
        public $user;   // variable property
        public $userId;    // variable property
        
        public function __construct($userName, $userId){
            $this->user = $userName;   // When you access an object property using the $this keyword, you use the $ with the this keyword only. 
                                    // And you don’t use the $ with the property name. 
            $this->userId = $userId;      

        } 
        public function display(){ // parent class a display and child class a display
            echo "UserName is ".$this->user." and UserId is ".$this->userId.".";
        }
    } 

    class Admin extends UserData{ // child class // inherited class
        public $level;
        public function display(){ // Here it is method overriding 
            // parent class a display and child class a display method 
            // but at this position it give priority to the child class same named method
            echo "Username is ".$this->user." and userId is ".$this->userId." and user level is ".$this->level.".";
            echo "<br/>";
            echo "Hi,{$this->user}. Upadate your site.";
        }
    }

    $userN = "Riyad";
    $idN = "24";
    $User1 = new UserData($userN,$idN); // object declaring and value passing with class constructor
    echo "<br/>";
    $User1->display();
    echo "<br/>";


    $adUser = "Riyad-Ad";
    $adId = "1";
    $admin1 = new Admin($adUser,$adId);
    $admin1->level = "Administrator";
    $admin1-> display();

    
?>


</section> 

<?php 

    include "footer.php";

?>
