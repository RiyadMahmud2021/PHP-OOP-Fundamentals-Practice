<!-- Static properties & methods -->
<!-- 
    Importance of Static properties & methods
    A: 
    - Static properties can be called directly - without creating an instance of a class.
    - Without object creating static method can do access.
 -->

 <!-- 
     "::"  is called scope resulation operator.
  -->

<?php 

    include "header.php";

?>


<section class="mainContent">

<?php


$companyName = "";

    class UserData{     // person is the class name
                            
        public $user;   // variable property
        public $userId;    // variable property
        const CompanyName = "BMIT Solution Ltd."; // oop ar moddha "const" and stuctural php ta "define" diya
        public static $age = "30"; // Static properties declaring
        
        public function __construct($userName, $userId){
            $this->user = $userName;   // When you access an object property using the $this keyword, you use the $ with the this keyword only. 
                                    // And you don’t use the $ with the property name. 
            $this->userId = $userId;      

            echo "UserName is ".$this->user." and UserId is ".$this->userId."." ;
        }

        public static function display(){
            echo "<h1>".UserData::CompanyName."</h1>"; // php class constant in h1 tag
            echo  UserData::$age; // Static properties accessing
        } 

        public function __destruct(){
            unset($this->user); // Object property value cleaning.// database conncection closing. // removing data.
            unset($this->userId);
        }
    } 

    
    $User1 = new UserData("Riyad Mahmud","24"); // object declaring and value passing with class constructor
    echo "<br/>";
    echo "<br/>";
    $User1-> display();
    echo "<br/>";
    echo "<br/>";
    UserData :: display(); // Static method accessing



?>

</section> 


<?php 

    include "footer.php";

?>
