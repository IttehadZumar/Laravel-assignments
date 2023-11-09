<?php 
// array_combine
$arr1 = ['a', 'b', 'c', 'd', 'e'];
$arr2 = ['10', '20', '30', '40', '50'];
print_r( array_combine($arr1, $arr2));

// array_fill
print_r(array_fill(0,4,["Ittehad", "Abdullah", "Zumar", "IAZ"]));