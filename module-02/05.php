<?php 
// fibonacci series 0 1 1 2 3 5 8 13 21 34 55....


$veryOld=0;
$old=1;
$new=1;
for($i=0;$i<=200;$i++){
    echo $veryOld.PHP_EOL;
    $veryOld=$old;
    $new=$old;
}