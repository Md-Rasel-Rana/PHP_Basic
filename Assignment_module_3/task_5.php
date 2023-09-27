<?php

function generatePassword($length) {
    
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numericChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $lowercaseChars . $uppercaseChars . $numericChars . $specialChars;
    $password = '';
    for ($i = 0; $i < $length; $i++) {
       
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
        $password .= $randomChar;
    }
    return $password;
}
$password = generatePassword(12);
echo $password;

?>
