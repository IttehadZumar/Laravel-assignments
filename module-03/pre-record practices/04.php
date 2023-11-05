<?php
// string to array conversion
$names = explode(', ', 'Ittehad, Abdullah, Zumar');
// ', ' is said as delimeter
var_dump($names);
echo $names[1].PHP_EOL;
echo "number of elements: ".count($names).PHP_EOL;

// array to string
$nameString = join(', ', $names);
echo $nameString.PHP_EOL;

// string to array conversion rule: 2, when there are multiple delimeter
$names1 = preg_split('/(, |,|,  )/', 'Sumaiya,  Haque,Ittehad, Abdullah, Zumar');
echo "number of elements: ".count($names1).PHP_EOL;

