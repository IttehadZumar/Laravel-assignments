<?php 
$username = "Ittehad";
$password = "123456";
$hashedPassword = md5($password);
echo $hashedPassword."\n";

$formPassword = "123456";
$formUsername = "Ittehad";
if($formUsername == $username && md5($formPassword) == $hashedPassword){
    echo "Welcome, ".$username;
}
else{
    echo "Invalid username or password";
}

$text = "Hello World";
$md5hash = md5($text);
$sha1hash = sha1($text);
echo $md5hash."\n"; 
echo $sha1hash."\n";