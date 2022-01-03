<!-- Magic Method   __get() , __set() , __call()  -->
<!-- 
__constuct(); // script loadding a __constuct(); aga load hoy
__destruct(); // script loadding a __destruct(); sobar ses a load hoy
__get($property); // work for udefined property automatically
__set($property,$value); // 
__call($method, $arg_array); // 
__autoload($class_name)
-->

<?php

    class Student {
        // public $name;
        public function describe(){
            echo "I am a student. <br/>";
        }
        public function __get($sm){
            echo "$sm does not exist <br/>";
        }
        public function __set($pm,$value){
            echo "We set $pm-> $value <br/>";
        }
        public function __call($dm, $value){
            echo 'There is no <b>' .$dm. '</b> method and Arguments:'.implode(',',$value); 
                // impolde(), See detail: https://www.w3schools.com/php/func_string_implode.asp
        }
    }


    $st = new Student();
    $st-> describe();
    $st-> Hasan; // passing data to $sm of __get($sm)
    $st-> age = 15; // passing data to $pm of __set($pm,$value)

    $st-> notExistEmMethod('2','8','5'); // passing data to $dm of __call($dm, $value)


?>