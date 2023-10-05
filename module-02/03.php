<?php
// show the number which can be divided by 7 and 11 with 0 remainder btween 100
for ($i = 0; $i <= 100; $i++) {
    /* if($i % 7 == 0){
        echo $i.PHP_EOL;
    }
    if($i % 11 == 0){
        echo $i.PHP_EOL;
    } */
    /* echo $i % 7 == 0 ? $i. "\n" : "";
    echo $i % 11 == 0 ? $i. "\n" : ""; */
}

// multiple stepping
for($i=0,$j=0;$i<=100;$i+=7,$j+=11){
    echo $i.PHP_EOL;
    echo $j<100?$j.PHP_EOL:"";
}
