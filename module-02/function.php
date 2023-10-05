<?php
// check if the number is even or odd
function isEven($x)
{
    if ($x % 2 == 0) {
        return true;
    }

    return false;
}

// factorial printing
function factorial(int $n)
{
    /* if (gettype($n)!="integer"){
        return "invalid";
    } */
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

// define return type
function sum(int $a, int $b, int $c):int{
    return $a+$b+$c;
}
echo sum(5,6,7).PHP_EOL;

// unlimited arguments and params
function infiniteSum(...$n):int{
    $result = 0;
    for($i=0; $i<count($n);$i++){
        $result += $n[$i];
    }
    return $result;
}
echo infiniteSum(1,2,3,4,5,6,7,8,9).PHP_EOL;