<!-- Class Constants -->
<!-- 

    Constants cannot be changed once it is declared.

    Class constants can be useful if you need to define some constant data within a class.

    A class constant is declared inside a class with the const keyword.

    Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.

    We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name
 
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
        
        public function __construct($userName, $userId){
            $this->user = $userName;   // When you access an object property using the $this keyword, you use the $ with the this keyword only. 
                                    // And you don’t use the $ with the property name. 
            $this->userId = $userId;      

            echo "UserName is ".$this->user." and UserId is ".$this->userId."." ;
        }

        public function display(){
            echo "<h1>".UserData::CompanyName."</h1>"; // php class constant in h1 tag
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

?>

</section> 


<?php 

    include "footer.php";

?>
