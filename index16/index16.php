<!-- Autoloading Classes, spl_autoload_register()-->


<!-- 
    *Importance
    - An autoloader is a function that takes a class name as an argument and then includes the file that contains the corresponding class, 

    - The spl_autoload_register() function registers any number of autoloaders, enabling for classes and interfaces to be automatically loaded if they are currently not defined. By registering autoloaders, 
    PHP is given a last chance to load the class or interface before it fails with an error. 
-->

<?php

    // Rule 1:
    // function __autoload($class_name){
    //     echo " <br/> $class_name <br/>";
    // include "classes/".$class_name.".php";

    // }

    // Rule 2:
    spl_autoload_register(function($class_name){
        echo " <br/> $class_name <br/>";
        include "classes/".$class_name.".php";
    });

$laravel1 = new Laravel;
$React1 = new React;
$PHP1 = new PHP;

?>