<?php 
class Human{
    public $name;
    public function getName(){
        echo "My name is $this->name";
    } 
}
$h1 = new Human();
$h1->name = "Ittehad";
// echo $h1->name;
$h1->getName();