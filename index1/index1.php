<!-- Class, Property, Method and Object -->
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

-->
<!-- Header include-->
<?php include 'header.php'; ?>
<!-- Header -->

  
<!-- Main Content -->
<section class="mainContent">
<?php

// 1st 
// --------
    class person1{     // person is the class name
            
            public $name ;   // variable property
            public $age ;    // variable property
                
            public function personName(){ //  personName() is the functional property / method
                echo "Person name is ".$this->name;
            }
            public function personAge(){  //  personAge() is the functional property / method
                echo "The age of ".$this->name." is ".$this->age.".";
            }

    } 

    $personOne = new Person1;
    echo $personOne -> name = "Riyad Mahmud";
    echo "<br/>";
    echo $personOne -> age = "24";
    echo "<br/>";
    echo "<br/>";

// 2nd 
// ----------
    class person2{     // person is the class name
                
        public $name ;   // variable property
        public $age ;    // variable property
            
        public function personName(){ //  personName() is the functional property / method
            echo "Person name is ".$this->name.".";
        }
        public function personAge(){  //  personAge() is the functional property / method
            echo "The age of ".$this->name." is ".$this->age.".";
        }

    } 

    $personOne = new Person2;
    $personOne -> name = "Riyad Mahmud";
    $personOne -> age = "24";
    echo $personOne -> personName();
    echo "<br/>";
    echo $personOne -> personAge();
    echo "<br/>";
    echo "<br/>";

// 3nd 
// ----------
    class person3{     // person is the class name
                    
        public $name ;   // variable property
        public $age ;    // variable property
            
        public function personName(){ //  personName() is the functional property / method
            echo "Person name is ".$this->name.".";
        }
        public function personAge($value1){  //  personAge() is the functional property / method
            echo "The age of ".$this->name." is ".$this->age=$value1."."; // value pass korlaoo varibale deya lagba must public $name, public $age
        }

    } 

    $personOne = new Person3;
    $personOne -> name = "Riyad Mahmud";
    echo $personOne -> personName();
    echo "<br/>";
    echo $personOne -> personAge("24");
    echo "<br/>";
    echo "<br/>";

// 4nd 
// ----------
class person4{     // person is the class name
                    
    public $name ;   // variable property
    public $age ;    // variable property
        
    public function personName(){ //  personName() is the functional property / method
        echo "Person name is ".$this->name.".";
    }
    public function personAge($value){  //  personAge() is the functional property / method
        echo "The age of ".$this->name." is ".$this->age = $value.".";
    }

} 

$personOne = new Person4;
$personOne -> name = "Riyad Mahmud";
echo $personOne -> personName();
echo "<br/>";
echo $personOne -> personAge("24");
echo "<br/>";
echo "<br/>";


// 5nd 
// ----------

    class person5{     // person is the class name
                
        public $name = "Riyad Mahmud";   // variable property
        public $age = "24";    // variable property
            
        public function personName(){ //  personName() is the functional property / method
            echo "Person name is ".$this->name.".";
        }
        public function personAge(){  //  personAge() is the functional property / method
            echo "The age of ".$this->name." is ".$this->age.".";
        }

    } 

    $personOne = new Person5;
    echo $personOne -> name;
    echo "<br/>";
    echo $personOne -> age;
    echo "<br/>";
    echo $personOne -> personName();
    echo "<br/>";
    echo $personOne -> personAge();


?>
</section> 
<!-- Main Content -->


<!-- Footer include-->
<?php include 'footer.php'; ?>
<!-- Footer -->