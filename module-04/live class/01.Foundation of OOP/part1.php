<?php 
/* 
class & object:
1. class allows developers to encapsulate related data and functions into a single entity.
2. an object is an instance of a class. object of a class created with new keyword
*/

class Person{
    public $name = "Ittehad\n"; //public is the access modifier, variable is the class property
    public $age = 23;
    
    public function addTwo($n1, $n2){
        echo $n1+$n2.PHP_EOL;
        echo $this->age.PHP_EOL; 
    }
}

// create an instance
$obj = new Person(); //the parenthesis means the constructor inside the class

// use the class properties
$obj->addTwo(2,5);
echo $obj -> name;