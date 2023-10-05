<?php
include_once "function.php";

$x = 25;
if (isEven($x)) {
    echo "$x is an even number";
} else {
    echo "$x is an odd number" . PHP_EOL;
}

$n = "5";
echo "factorial of $n is: " . factorial($n);
