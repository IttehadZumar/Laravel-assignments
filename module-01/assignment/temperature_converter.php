<?php

$celsius1 = 29;
$celsius2 = 10;
$celsius3 = 50;


function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}


$fahrenheit1 = celsiusToFahrenheit($celsius1);
$fahrenheit2 = celsiusToFahrenheit($celsius2);
$fahrenheit3 = celsiusToFahrenheit($celsius3);

echo "Temperature 1 in Celsius: $celsius1 degree C, Temperature 1 in Fahrenheit: $fahrenheit1 degree F\n";
echo "Temperature 2 in Celsius: $celsius2 degree C, Temperature 2 in Fahrenheit: $fahrenheit2 degree F\n";
echo "Temperature 3 in Celsius: $celsius3 degree C, Temperature 3 in Fahrenheit: $fahrenheit3 degree F\n";
