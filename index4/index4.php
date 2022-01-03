<!-- Destructor Method -->

<!-- 

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
    - removing data.
    - database conncection closing.
    - works at the last time of coding.

   

    
-->

<?php 

    include "header.php";

?>


<section class="mainContent">

<?php

class Person{     // person is the class name
                        
    public $name;   // variable property
    public $age;    // variable property
    public $id;
     
    public function __construct($name, $age){
        $this->name =$name;   // When you access an object property using the $this keyword, you use the $ with the this keyword only. 
                                // And you don’t use the $ with the property name. 
        $this->age =$age;      
    }

    
    public function setId($id){ //  personName() is the functional property / method
        $this->id = $id; 
                    // when setting id... respect of this id, class's object based all data will be set on database
                     
    }
 
    public function __destruct(){
        if(!empty($this->id)){
            echo "Saving Person";    
        }
    }
} 


$personOne = new Person("Riyad Mahmud","24"); // object declaring and value passing with class constructor
$personOne -> setId(1);
unset($personOne); // distroying object of a class.

?>

</section> 


<?php 

    include "footer.php";

?>
