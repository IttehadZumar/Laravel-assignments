<?php
$string = " hello\n";
$string = trim($string, ' ');
echo $string;
echo "Data";

$name = "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of (The Extremes of Good and Evil) by Cicero, written in";
echo wordwrap($name, 50);

echo nl2br($name); //this function converts \n to br tag in html document

// sscanf function
$person = "Abul Hosen 8149861987462";
$parts = sscanf($person, "%s %s %s");
print_r($parts);

// another rule
sscanf($person, "%s %s %s", $fname, $lname, $number);
echo $fname.PHP_EOL;
echo $lname.PHP_EOL;
echo $number.PHP_EOL;