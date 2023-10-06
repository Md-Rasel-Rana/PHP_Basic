<?php

// $originalText = "Bondhu tumi agamikal Uttara Starbase restaurant e asho";
// $hash = md5($originalText);

// $originalHash = '1bb573c842302e71be5eb8082bbf9b2e';

// echo $hash;
// $myinfo= "my name is rasel rana";
// $changehash = md5($myinfo);
// echo $changehash;

// $text = "Hello World";
// $md5Hash = md5($text);
// $sha1Hash = sha1($text);
// echo $md5Hash;
// echo "\n";
// echo $sha1Hash;

// if(md5($text)=='b10a8db164e0754105b7a99be72e3fe5'){
//     echo "Matched";
// }


$username  = "JohnDoe";
// $password = "12345ABCD";
// $passwordHash = md5($password);
// echo $passwordHash;
$passwordHash = "fad19b18e34ac26499a4fcf2e58d9349";


$formUserName = "JohnDoe";
$formPassword = "12345ABCD";
//database = username = JohnDoe, password = 12345ABCD


// if($username == "JohnDoe" && $password == "12345ABCD"){
//     echo "Welcome JohnDoe";
// }else{
//     echo "Wrong username or password";
// }

if($formUserName==$username && md5($formPassword)==$passwordHash){
    echo "Welcome JohnDoe";
}else{
    echo "Wrong username or password";
}