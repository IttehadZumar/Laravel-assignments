<?php
// array sorting 
$fruits = ['a'=> 'apple', 'b' => 'banana', 'c' => 'mango', 'lichi', 'jackfruit', 'guava'];
// sort($fruits); //ascending order, rsort-> descending order
// ksort($fruits); //sorting using keys ascending, krsort->descending 
// print_r($fruits);

// to preserve keys
asort($fruits);
print_r($fruits);

// but here is a problem of using asort in numerical data array, when using for loop
$numbers = [1,4,5,9,2,7,11,567,36,356];
sort($numbers, SORT_STRING); //to sort as a string 
asort($numbers); //ascending order, arsort -> descending
print_r($numbers);
$count = count($numbers);
for($i =0; $i<$count; $i++){
    echo $numbers[$i].PHP_EOL; //the output is not sorted
}

// to overcome this problem foreach loop is used
echo "-----------using foreach loop-------------".PHP_EOL;
foreach($numbers as $number){
    echo $number.PHP_EOL;
}

$random = array ('apple', 'Apple', 'banana', 'Banana', 'Pineapple');
sort($random, SORT_STRING | SORT_FLAG_CASE);
print_r($random);