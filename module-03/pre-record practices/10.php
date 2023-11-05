<?php 
// extracting data from array
$fruits = ['apple', 'banana', 'mango', 'lichi', 'jackfruit', 'guava'];
$someFruits = array_slice($fruits,2);
$someFruits1 = array_slice($fruits,2,2, true); //pass true for previous indexing
$someFruits2 = array_slice($fruits,2,-1);
print_r($someFruits);
print_r($someFruits1);
print_r($someFruits2);

// slicing from associative array
$random = array('a'=>12, 'b'=>30,'c'=>40,'d'=>10, 'e'=> 25, 11 => 78, 'f'=> 13);
$randomData = array_slice($random,2,null, true);
print_r($randomData);