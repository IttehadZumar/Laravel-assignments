<?php 
$string = "Hidden important text";
$key = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ ";
// $newKey = str_shuffle($key);
$newKey = "e3lChgjwy6M2fbLQExD4BInOGWiZ1V7PqXk0aH9umASdFYNtTo5pvcJsRrU8zK ";
// echo $newKey."\n";
$encryptedText = "";
$length = strlen($string);

for($i=0; $i < $length; $i++){
    $currentLetter = $string[$i];
    $currentPosition = strpos($key, $currentLetter);
    // echo $currentPosition."\n";
    $replacement = $newKey[$currentPosition];
    $encryptedText .= $replacement;
}                                                           
echo $encryptedText."\n";