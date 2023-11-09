<?php
// accessing some portion of a string
$name = "Ittehad Abdullah Zumar";
echo substr($name, 8, 8) . PHP_EOL;

// last 3 letters
$length = strlen($name);
echo substr($name, $length - 3) . PHP_EOL;

// reverse the string
// 01. using pre definded function
echo strrev($name) . PHP_EOL;

// 02. Using loop
for ($i = 1; $i <= $length; $i++) {
    echo $name[$i * -1];
}
