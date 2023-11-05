<?php 
$student = array (
    "fname" => "Ittehad",
    "lname" => "Abdullah",
    "Age" => 23,
    "class" => "4th year",
    "section" => "55_R"
);

print_r($student);
printf("%s %s \n", $student['fname'], $student['lname']);

// associative array to string conversion rule:01- serialize or unserialize
$serialized = serialize($student);
echo $serialized.PHP_EOL;

$unserialized = unserialize($serialized);
print_r($unserialized).PHP_EOL;

// associative array to string conversion rule:02- json data and reconvert
$jsonData = json_encode($student);
echo $jsonData.PHP_EOL;
$reconverted = json_decode($jsonData);
// after conversion it's now object, when php decodes json data in becomes object. to avoid it define it as "true"
print_r($reconverted, true);