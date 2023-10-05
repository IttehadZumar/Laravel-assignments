<?php 
function num($n){
    if ($n>10){
        return;
    }
    echo $n.PHP_EOL;
    $n++;
    num($n);
}
// num(1);

function printNumber($counter, $end){
    if($counter>$end){
        return;
    }
    echo $counter.PHP_EOL;
    $counter++;
    printNumber($counter, $end);
}
printNumber(20,40);