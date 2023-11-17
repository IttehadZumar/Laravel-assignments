<?php
/* 
The most important of oop is inheritance
1. Inheritance sets up a like parent like child relationship between classes.
2. Instead of rewriting code, the child class can reuse or change what it gets from parent.
3. One class (the child) can use everything from another class (the parent)
*/

/* class father{
    public function print(){
        echo "I am father";
    }
}

class son extends father{

}
$obj = new son();
$obj->print();  */


//================================================
//overriding medhods:
// 1. subclasses can override inherited methods from the superclass
/* class Father
{
    public function print()
    {
        echo "I am father";
    }
}

class Son extends Father
{
    public function print()
    {
        echo "I am son";
    }
}
$obj = new son();
$obj->print(); */



//================================================
// Final Keyword:
// 1. if a class is declaed as final, it can't be inherited
// 2. if a method is declaed as final, it can't be override by subclass

/* final class Father
{
    final public function print()
    {
        echo "I am father";
    }
}

class Son extends Father
{
    public function print()
    {
        echo "I am son";
    }
}
$obj = new son();
$obj->print(); */



//================================================
/* 
Abstract class:
1. abstract class can't be insantiated on their own but can be subclassed, that means abstract class can not create it's object and can't use it properties
*/

/* abstract class Father
{
    public function print()
    {
        echo "I am father";
    }
}

class Son extends Father
{
    public function print()
    {
        echo "I am son";
    }
}
$obj = new son();
$obj->print(); */




//================================================
/* 
Constructor and inheritance:
1. if a child class has its own constructor, the parent class's constructor will not be automatically called 
2. use parent::__construct() if you want to explicitly call the base class's constructor 
*/

/* class Father
{
    public function __construct()
    {
        echo "I am father \n";
    }
}

class Son extends Father
{
    public function __construct()
    {
        parent::__construct(); //this will enable to use parent construct also
        echo "I am son \n";
    }
}
new son(); */



//================================================
/* 
Parent keyword to access parent class methods
*/

class Father
{
    public function printF()
    {
        echo "I am father";
    }
}

class Son extends Father
{
    public function printS()
    {
        parent::printF();
    }
}
$obj = new Son();
$obj -> printS();