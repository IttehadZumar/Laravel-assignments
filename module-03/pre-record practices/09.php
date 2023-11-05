<?php
// check variables with or without values
$name = 0;
if (isset($name)) {
    echo "name is set" . PHP_EOL;
} else {
    echo "name not set" . PHP_EOL;
}
$class = 10;
if (isset($class)) {
    echo "class is set" . PHP_EOL;
} else {
    echo "class not set" . PHP_EOL;
}

if (empty($name)) {
    echo "name is empty" . PHP_EOL;
} else {
    echo "name not empty" . PHP_EOL;
}
