<?php
// array splice, modify the original array
$fruits = ['apple', 'banana', 'mango', 'lichi', 'jackfruit', 'guava'];
$someFruits = array_splice($fruits, 2, 3, ['dates', 'orange']);
print_r($fruits);
print_r($someFruits);