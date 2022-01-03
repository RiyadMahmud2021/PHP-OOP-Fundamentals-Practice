<?php


class Language{
    private $category;
    private $framework;

    function setCategory($a){
        $this-> category = $a;
    }
    function getCategory(){
        return $this-> category;
    }

    function setFramework($b){
        $this->framework = $b;
    }
    function getFramework(){
        return $this->framework;
    }
}
?>


