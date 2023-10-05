<?php
$score1 = 85;
$score2 = 92;
$score3 = 78;

$average = ($score1 + $score2 + $score3) / 3;

if ($average >= 80) {
    $grade = 'A+';
} elseif ($average >= 80) {
    $grade = 'A';
} elseif ($average >= 75) {
    $grade = 'A-';
} elseif ($average >= 70) {
    $grade = 'D';
} else {
    $grade = 'F';
}

// Display the average score and corresponding grade
echo "Average Score: $average". PHP_EOL;
echo "Grade: $grade". PHP_EOL;
