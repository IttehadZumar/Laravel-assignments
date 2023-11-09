<?php
$name = "Ittehad Abdullah Zumar ittehad";
echo strpos($name, 'Z') . PHP_EOL; //case sensitive function
echo stripos($name, 'z') . PHP_EOL; //case insensitive function
echo strripos($name, 'd') . PHP_EOL; //catch the last one

// replace
$replaced = str_replace('ittehad', 'IAZ', $name); //case sensitive
echo $replaced . PHP_EOL;

$replaced1 = str_ireplace('ittehad', 'IAZ', $name, $count); //case insensitive
echo $replaced1 . PHP_EOL;
echo "Total Replaced: {$count}\n";

$replaced2 = str_ireplace(array('ittehad', 'Abdullah', 'Zumar'), array('Sumaiya', 'Haque', 'IAZ'), $name, $count); //case insensitive
echo $replaced2 . PHP_EOL;