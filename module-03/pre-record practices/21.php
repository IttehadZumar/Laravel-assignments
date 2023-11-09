<?php 
$fruits = array('a'=>'apple','b'=>'banana','c'=>'cherry','d'=>'dates');
shuffle($fruits);
// key are lost after using shuffle for associative array, array_rand is safe
print_r($fruits);