<?php
// searching in indexed and associated arrays
$fruits = ['a' => 'apple', 'b' => 'banana', 'c' => 'mango', 'lichi', 'jackfruit', 'guava'];
$numbers = [1, 4, 5, 9, 2, 7, 11, '567', 36, 356];
if (in_array(567, $numbers, true)) { //true is used to check data type
    echo "567 is found";
} else {
    echo "not found";
}
