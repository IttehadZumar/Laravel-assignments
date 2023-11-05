<?php
// concatenating several arrays
$fruits = ['apple', 'banana', 'mango', 'lichi', 'jackfruit', 'guava'];
$random = array('a' => 12, 'b' => 30, 'c' => 40, 'd' => 10, 'e' => 25, 11 => 78, 'f' => 13);

$newFruits1 = array_slice($fruits, 0,3, true);
$newFruits2 = array_slice($fruits, 3,null, true);
$newFruits = array_merge($newFruits1, $newFruits2);
print_r($newFruits1);
print_r($newFruits2);
print_r($newFruits);

// this can be done using + operator, but to use + need to preserve keys using true
$newFruitsPlus = $newFruits1 + $newFruits2;
print_r($newFruitsPlus);