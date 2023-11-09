<?php
// some utility funtions
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
function square($n)
{
    printf("The square of %d is %d\n", $n, $n * $n);
}
// square(5);
array_walk($numbers, 'square');

// to return the result in a new array
function cube($n)
{
    return $n * $n * $n;
}
$newArray = array_map('cube', $numbers);

function even($n)
{
    return $n % 2 == 0;
}
$evenNumbers = array_filter($numbers, 'even');

print_r($numbers);
print_r($newArray);
print_r($evenNumbers);

$students = array('sayma', 'sakib', 'sajib', 'shuvo'. 'shihab', 'shakil', 'mishu', 'maysha', 'maliha');
function filterByS($name){
    return $name[0] == 's'; 
}
$newStudents = array_filter($students, 'filterByS');
print_r($newStudents);