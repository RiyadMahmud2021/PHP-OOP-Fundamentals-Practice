<!-- Class & Method Existence -->
<!-- 
    
    # Importance
    A: 
    The method_exists() function checks if the class method exists.

 -->

<?php
include "Student.php";
?>


<?php

if(class_exists("Student")){   // Class Existence

    $st = new Student();
    if(method_exists($st,"describe")){
        $st-> describe();
    }
    else{
        echo "Method not found";
    }
}
else{
    echo "Class not found";
}
   
?>
