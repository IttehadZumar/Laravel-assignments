<?php 
/* $numbers = array();
for($i = 12; $i<21; $i++){
    array_push($numbers,$i);
} */

$numbers = range(12,20, 2);
print_r($numbers);

foreach(range(12,20,2) as $evenNumbers){
    echo $evenNumbers.PHP_EOL;
}

echo "-----------Divided by 11------------".PHP_EOL;
foreach(range(0,60,11) as $dividedBy11){
    if($dividedBy11 > 2){
        echo $dividedBy11.PHP_EOL;
    }
}