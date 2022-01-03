<!-- Constructor Method -->

<!-- 

    => What is $this in PHP? (https://www.phptutorial.net/php-oop/php-this/)
    A: 
        In PHP, $this keyword references the current object of the class. 
        The $this keyword allows you to access the properties and methods of the current object within the class using the object operator (->):
        
        $this->property
        $this->method() 

        The $this keyword is only available within a class. It doesn’t exist outside of the class. 
        If you attempt to use the $this outside of a class, you’ll get an error.
        
        When you access an object property using the $this keyword, you use the $ with the this keyword only. 
        And you don’t use the $ with the property name. 
        For example:       $this->balance

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


    *** Imp. Class constructor vs general class 
    A: 
        Class constructor: 
                - new object thaka class ar nam diyai parameter gulo deya zay... see(index3.php)
                - "taking value from class constructor, we can use these parameter value in all method" of related class.
        General class: new object ar satha class k link kora alada alada kora property and method a value pass korta hoy..
        see(index1.php)
-->

<?php 

    include "header.php";

?>

<section class="mainContent">

<?php

    class Person{     // person is the class name
                        
        public $name ;   // variable property
        public $age ;    // variable property
         
        public function __construct($name, $age){
            $this->name =$name;   // When you access an object property using the $this keyword, you use the $ with the this keyword only. 
                                    // And you don’t use the $ with the property name. 
            $this->age =$age;      
        }
        public function personDetails(){ //  personName() is the functional property / method
            echo "Person name is '".$this->name."' and the age of ".$this->name." is ".$this->age."." ;
        }
    } 
   
    $personOne = new Person("Riyad Mahmud","24"); // object declaring and value passing with class constructor
    $personOne -> personDetails(); // respect to $personOne, personDetails() member function calling of class

?>


</section> 
<?php 

    include "footer.php";

?>
