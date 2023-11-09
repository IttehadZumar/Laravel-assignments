<?php
// string to array conversion
$string = "Ittehad, Abdullah, Zumar";
$names = explode(', ', $string);

// ', ' is said as delimeter
var_dump($names);
echo $names[1] . PHP_EOL;
echo "number of elements: " . count($names) . PHP_EOL;

// array to string
$nameString = join(', ', $names); //implode is also used for joining
echo $nameString . PHP_EOL;

$nameString1 = implode(': ', $names);
echo $nameString1 . PHP_EOL;

// string to array conversion rule: 2, when there are multiple delimeter
// this can be done using strtok defined function, but count can't be performed
$names1 = preg_split('/(, |,|  )/', 'Sumaiya,  Haque,Ittehad, Abdullah, Zumar');
echo "number of elements: " . count($names1) . PHP_EOL;
print_r($names1);
