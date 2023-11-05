<?php
// multi dimensional array
$foods = [
    'vegetables' => explode(', ','brinjail, brocolli, carrot, capsicam'),
    'fruits' => explode(', ','mango, banana, apple'),
    'drinks' => explode(', ','water, milk'),
];

array_push($foods['drinks'], 'orange juice');
print_r($foods).PHP_EOL;
var_dump($foods).PHP_EOL;
echo $foods['vegetables'][3].PHP_EOL;