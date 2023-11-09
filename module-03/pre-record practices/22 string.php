<?php 
// String declaration ways:    single quote
                            // double quote
                            // heredoc
                            // nowdoc
$name = 'Ittehad';
echo "My name is $name \n";

$heredoc = <<<EOD
I am {$name}
I am from DIU
Final Semester
Laravel Developer
EOD;
echo $heredoc;