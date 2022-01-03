<!-- PHP Oject Clone -->
<!-- 
* What is PHP Object Cloning?
A: 
Object cloning is creating a copy of an object. An object copy is created by using the clone 
keyword and the __clone() method cannot be called directly.  

-->

<?php

    spl_autoload_register(function($class_name){
        echo " <br/> $class_name <br/>";
        include "classes/".$class_name.".php";
    });

    $PHP = new Language();
    $PHP->setCategory("OOP");
    $PHP->setFramework("CodeIgnitor");

    $Javascript = clone $PHP;
    $Javascript-> setFramework("React JS");


    echo $PHP-> getCategory(); 
    echo "<br/>";
    echo $PHP->getFramework();
    echo "<br/>";

    echo $Javascript -> getCategory();
    echo "<br/>";
    echo $Javascript-> getFramework();
    echo "<br/>";
?>