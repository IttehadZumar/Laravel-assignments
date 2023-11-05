<?php 
$person = array("fname"=> "hello", "lname" => "world");

$newPerson = $person; //this is called deep copy/ copy by value
$newPerson["lname"]="pluto"; 
print_r($person);
print_r($newPerson);

$newPerson1 = &$person; //copy by reference/ pointer/ shallow copy
$newPerson1["fname"] = "bye";
print_r($person);

// this behavior may be changed for object type data