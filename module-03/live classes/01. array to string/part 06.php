<?php 
$persons = [
    ['fname' => 'Sumaiya', 'lname' => 'Haque', 'email' => 'sumaiyahaq@gmail.com', 'age' => 16],
    ['fname' => 'Ittehad', 'lname' => 'Abdullah', 'email' => 'ittehadabdullah@gmail.com', 'age' => 23],
    ['fname' => 'Oishi', 'lname' => 'Saha', 'email' => 'oishisaha@gmail.com', 'age' => 24],
];
$firstName = array_column($persons, 'fname');
print_r($firstName);

// array_flip
$random = array('a' => 12, 'b' => 30, 'c' => 40, 'd' => 10, 'e' => 25, 11 => 78, 'f' => 13);
$flipped = array_flip($random);
print_r($flipped);