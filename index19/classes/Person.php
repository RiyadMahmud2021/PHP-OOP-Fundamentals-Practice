<?php

class Person{
    public $Name = "Riyad";
    public $Age = "24";
    public $Skill = "Web Developer";

    private $Email  = "riyad.prof.bd@gmail.com";
    protected $Password = "123456789";


    function interatorInner(){
        echo "Inside Class";
        foreach ($this as $key => $value){ // "$this" keyword , must be "$this" 
            echo "<pre>";
            echo "$key => $value";
            echo "<pre/>";
        }
    
    }
}


?>