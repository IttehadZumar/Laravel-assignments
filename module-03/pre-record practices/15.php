<?php
// check difference and intersection between 2 arrays
$fruits1 = ['a' => 'apple', 'b' => 'banana', 'c' => 'mango', 'lichi', 'jackfruit', 'guava'];
$fruits2 = ['a' => 'apple', 'b' => 'banana', 'e' => 'mango'];
$numbers1 = [1, 4, 5, 9, 2, 7, 11, '567', 36, 356];
$numbers2 = [1, 4, 5, 9, 2, 7];

$commonNumbers = array_intersect($numbers1,$numbers2);
$commonFruits = array_intersect($fruits1,$fruits2);
// to check similarities within keys
$commonFruits1 = array_intersect_assoc($fruits1,$fruits2);
print_r($commonNumbers);
print_r($commonFruits);
print_r($commonFruits1);

// check differences
$diff = array_diff($fruits1,$fruits2);
echo "different fruits\n";
print_r($diff);