<?php
/* 
Constructor
1. method that executed whenever an object is instantiated from a class
2. the constructor method has an magic name: __construct
*/

class Persons
{
    function __construct($n1, $n2)
    {
        echo "I am constructor\n";
        echo $n1+$n2;
    }
}
new Persons(5,10);