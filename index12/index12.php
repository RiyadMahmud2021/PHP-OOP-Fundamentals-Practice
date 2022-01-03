<!-- Interface -->
<!-- 
* What are Interfaces?
A:  Interfaces allow you to specify what methods a class should implement.

    Interfaces make it easy to use a variety of different classes in the same way. 
    When one or more classes use the same interface, it is referred to as "polymorphism".

*  
A: 
-->
<?php 

    include "header.php";

?>

<section class="mainContent">

<?php
          
         interface School{ // no function symble()

            public function mySchool(); 
            
         }
         interface College{ // no function symble()

            public function myCollege();
            
         }
         interface University{ // no function symble()

            public function myUniversity();

         }

         class Teacher implements School, College, University{

            public function __construct(){
               $this->mySchool();
               $this->myCollege();
               $this->myUniversity();
            }
                public function mySchool(){
                    echo "I am a School teacher.";
                    echo "<br/>";
                }
                public function myCollege(){
                    echo "I am a College teacher."; 
                    echo "<br/>";
                }
                public function myUniversity(){
                    echo "I am a University teacher.";
                    echo "<br/>";
                    echo "<br/>";
                }
       
         }

         class Student implements School{

            public function __construct(){
                $this->mySchool();
               $this->myCollege();
               $this->myUniversity();
            }
                public function mySchool(){
                    echo "I am a School student.";
                    echo "<br/>";
                }
                public function myCollege(){
                    echo "I am a College student.";
                    echo "<br/>";
                }
                public function myUniversity(){
                    echo "I am a University student.";
                    echo "<br/>";
                }
        

            }

         $teacher = new Teacher();
         $student = new Student();

          
?>


</section> 

<?php 

    include "footer.php";

?>
