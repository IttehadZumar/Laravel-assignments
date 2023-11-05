<?php
// associative array
$players = [
    '12' => 'Ittehad',
    '75' => 'Shakib',
    '8' => 'Kumara'
];

echo $players[75] . PHP_EOL;

$foods = [
    'vegetables' => 'brinjail, brocolli, carrot, capsicam',
    'fruits' => 'mango, banana, apple',
    'drinks' => 'water, milk'
];

// looping in associative array
foreach ($foods as $key => $value) {
    echo $key . "=" . $value . PHP_EOL;
}

echo "-----------printing array keys------------";
$keys = array_keys($foods);
print_r($keys);

// for loop iteration using keys
for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    echo "$foods[$key]";
}

// for loop iteration using values
$values = array_values($foods);
print_r($values);
for ($i = 0; $i < count($values); $i++) {
    $value = $values[$i];
    // print_r($value);
    echo $value.PHP_EOL;    
}
