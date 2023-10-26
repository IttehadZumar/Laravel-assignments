<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;

        echo "Student $student - Average Grade: $average\n";
    }
}

// Create a multidimensional array with student grades
$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student2' => array('Math' => 90, 'English' => 88, 'Science' => 94),
    'Student3' => array('Math' => 77, 'English' => 85, 'Science' => 80)
);

// Call the function with the student grades array as an argument
calculateAverageGrades($studentGrades);
