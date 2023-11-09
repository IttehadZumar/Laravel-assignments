<?php 
$numbers = range(40,72);
// print_r($numbers);
$random = mt_rand(0,32);

$luck = $numbers[$random];
if($luck % 2 == 0){
    echo "Head\n";
}
else{
    echo "Tail\n";
}

shuffle($numbers);
// print_r($numbers);
echo $numbers[5].PHP_EOL;