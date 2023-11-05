<?php
$student = array(
    "fname" => "Ittehad",
    "lname" => "Abdullah",
    "Age" => 23,
    "class" => "4th year",
    "section" => "55_R"
);
// remove a data from associative array
unset($student['section']);
print_r($student);