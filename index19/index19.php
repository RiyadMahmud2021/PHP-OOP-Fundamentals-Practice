<!-- PHP Object Iteration -->
<!-- 

Iterator is a behavioral design pattern that allows sequential traversal through a complex data structure without exposing its internal details. 

PHP provides a way for objects to be defined so it is possible to iterate through a list of items, with, for example a foreach statement. 
By default, all visible properties will be used for the iteration. 

Detail: https://www.php.net/manual/en/control-structures.foreach.php 

-->

<?php
    spl_autoload_register(function($class_name){
        echo " <br/> $class_name <br/>";
        include "classes/".$class_name.".php";
    });

    $p1 = new Person;
    foreach ($p1 as $key => $value){ // not "$this" keyword , must be $p1
        echo "<pre>";
        echo "$key => $value";
        echo "<pre/>";
    }
    $p1-> interatorTnner();

?>