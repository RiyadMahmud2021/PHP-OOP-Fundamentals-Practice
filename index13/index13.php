<!-- Abstract Class -->
<!-- 
* What are Abstract Classes and Methods?
A:  Abstract classes and methods are when the parent class has a named method, 
        but need its child class(es) to fill out the tasks.

    An abstract class is a class that contains at least one abstract method. 
    An abstract method is a method that is declared, but not implemented in the code.

*  
A: 
-->
<?php 

    include "header.php";

?>

<section class="mainContent">

<?php
          
        abstract class Student{
            public $name;
            public $age;
        

        public function details(){
            echo $this->name. " is " .$this->age. " years old. <br/>";
        }

        abstract public function School();
    }
        
        class Boy extends Student{

            public function describe(){
                return parent :: details(). "And He is a high school student. <br/>";
            }
            public function School(){
                return "He likes to read religious book.";
            } 
        }

  
$s = new Boy();
$s-> name = "Riyad";
$s-> age = "24";
echo $s-> describe();
echo $s-> School();


          
?>


</section> 

<?php 

    include "footer.php";

?>
