<?php 
$fname = "Ittehad";
$lname = "Abdullah";
// var_dump($name);

// making uppercase method:01, not recommended
$uname = strtoupper($fname);

echo "my name is {$uname}";

// method:02, recommended
printf("\nMy name is %s", strtoupper($fname));