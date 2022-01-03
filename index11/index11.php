<!-- Polymorphism -->
<!-- 

* Polymorphism = Inheritance + overridden methods.

* PHP overriding method
A:
Method overriding allows a child class to provide a specific implementation of a method already provided by its parent class.

* " final " keyword 
A: 
- Stop extending power if a class
- Prevents child classes from overriding a method or constant by prefixing the definition with final. 
  If the class itself is being defined final then it cannot be extended. 
  
  Then If any one want to extend class of override method ,it will genaret a fatal error.

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
    echo "<br/>";


    // ------- Chacking Polymorphism -------
    echo "<br/>";
    if($admin1 instanceof UserData){
        echo "Object(admin1) is a object of Inherited class 'Admin'. This class is inherited from parent class 'UserData')";
        echo "<br/>";
    }
  
?>


</section> 

<?php 

    include "footer.php";

?>
