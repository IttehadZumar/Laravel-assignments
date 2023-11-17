<?php
/* 
Static properties
1. static properties are tied to the class
2. They can be accessed without creating any instance of the class
*/
/* class MyClass{
    public static function name(){
        echo "My name is Ittehad\n";
    }
}
MyClass::name();

$obj = new MyClass();
$obj->name(); */


//================================================
/* 
Static methods
1. Just like static properties, static methods are accessed without creating an instance of the class
2. they are often used as utility functions that do not rely on any instance specific data
*/




//================================================
/* 
accessing static properties inside class methods
1. within class methods, static properties and methods are accessed using the self keyword following
*/
class MyClass
{
    public static $name = "Ittehad";
    public static function name() //to access a static property both have to be static
    {
        echo self::$name;
    }

}

$obj = new MyClass();
$obj->name();