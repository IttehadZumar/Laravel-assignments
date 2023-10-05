<?php 
$i=0;
while($i<5){
    echo $i.PHP_EOL;
    $i++;
}
echo "------".PHP_EOL;

$i=0;
while($i++ <5){
    echo $i.PHP_EOL;
}
echo "------".PHP_EOL;

$i=0;
while(++$i <5){
    echo $i.PHP_EOL;
}
echo "------";

