<?php
function removeEvenNumbers($numbers) {
    $result = array(); // Initialize an empty array to store the odd numbers
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            // If the number is not even, add it to the result array
            $result[] = $number;
        }
    }
    // Print the resulting array
    print_r($result);
}

// Create an array containing the numbers 1 to 10
$numbers = range(1, 10);

// Call the function with the array as an argument
removeEvenNumbers($numbers);
