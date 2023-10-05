<?php

$name = "Earth";
function doSomething()
{
    global $name;
    echo $name; //best practice
    // echo $GLOBALS['name'];
}
// doSomething();

// static scope
function staticI(){
    static $i;
    $i = $i??0;
    $i++;
    echo $i.PHP_EOL;
}
staticI();
staticI();
staticI();
