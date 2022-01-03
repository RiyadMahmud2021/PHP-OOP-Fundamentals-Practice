<!-- Real Life Use of __construct() and __destruct() -->

<!-- 



    => What is a constructor PHP? (https://www.w3schools.com/php/php_oop_constructor.asp)
    A:
    It's a magic method. (PHP are special methods that are aimed to perform certain tasks. These methods are named with double underscore (__) as prefix.)
    
    A constructor allows you to initialize an object's properties upon creation of the object.

    If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

    => When need constructor function in class / Importance?
    A: 
    - When any functionality need to call automatically again&again/everytime you can create a constructor function in a class.
    - General function need to call outside of class. But when need to apply a function automaically in class for continue another work .... This time constructor fuction is very important.
    - Specially for preparing to use multiple input/value respect to class's variable property with a function, 
        constructor function policy is good for making this function. (https://www.w3schools.com/php/php_oop_constructor.asp)
    - This function is no named function but take default same as class name and it access parameter as class name. So parameter can give on object declaring time with class name.

    => Can we have multiple constructors in a class?
    A: 
    The technique of having two (or more) constructors in a class is known as constructor overloading.
    A class can have multiple constructors that differ in the number and/or type of their parameters. 
    It's not, however, possible to have two constructors with the exact same parameters.

    => What is Destructor in PHP? (https://www.phptutorial.net/php-oop/php-destructor/)
    A: 
    PHP allows you to define a destructor for a class using a special method __destruct(). 
    Unlike a constructor, a destructor doesn’t accept any argument. 
    The destructor is automatically invoked before an object is deleted. 
    It happens when the object has no reference or when the script ends.

    => Importance of Destructor in PHP...
    A: 
    - distroying object of a class.
    - Object property value cleaning.
    - removing data from property
    - database conncection closing.
    - works at the last time of coding.

    =>
   
    
-->

<?php 

    include "header.php";

?>


<section class="mainContent">

<?php

class UserData{     // person is the class name
                        
    public $user;   // variable property
    public $userId;    // variable property
      
    public function __construct($userName, $userId){
        $this->user = $userName;   // When you access an object property using the $this keyword, you use the $ with the this keyword only. 
                                // And you don’t use the $ with the property name. 
        $this->userId = $userId;      

        echo "UserName is ".$this->user." and UserId is ".$this->userId."." ;
    }

    public function __destruct(){
       unset($this->user); // Object property value cleaning.// database conncection closing. // removing data.
       unset($this->userId);
    }
} 


$User1 = new UserData("Riyad Mahmud","24"); // object declaring and value passing with class constructor

?>

</section> 


<?php 

    include "footer.php";

?>
