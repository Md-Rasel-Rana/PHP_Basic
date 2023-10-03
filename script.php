<!-- <?php 

// $string = "PHP & Framework Course From Ostad";
// $search = "Framework";
// $replace = "Laravel";

// $newString = str_replace($search,$replace,$string);
// // echo $newString;


// $string2 = "Language and Framework from Ostad";
// $search2 = ["Language","Framework"];
// $replace2 = ["PHP","Laravel"];
// $newString2 = str_replace($search2,$replace2,$string2);
// // $newString2 = str_ireplace($search2,$replace2,$string2);
// // echo $newString2;

// $newString3 = strtr($string2,[
//     "Language" => "PHP",
//     "Framework" => "Laravel"
// ]);
// echo $newString3;

// $str = 'bye bye bye';
// $new_str = str_replace('bye', 'hey', $str);

// echo $new_str; // hey hey hey
// echo $repreat= str_repeat("rasel",10);
// echo str_shuffle("rasel");
// print_r(str_split("Hello my name is rasel rana "));

// $str = 'first_name,last_name,email,phone';
// $headers = explode(',', $str);

// print_r($headers);



/////encode and decode function 
// $string = "PHP & Laravel Course From Ostad";
// $shuffled = str_shuffle($string);

// $encodedString = base64_encode($string);

// echo $encodedString;

// echo "\n";

// $string = "UEhQICYgTGFyYXZlbCBDb3Vyc2UgRnJvbSBPc3RhZA==";
// echo base64_decode($string);


//how to use string
//string is a sequence of characters
//string can be declared in 3 ways
//1. single quote
//2. double quote
//3. heredoc syntax
//4. nowdoc syntax
// $name = "Ostad";
// $name = 'Ostad';

// //concatenation
// echo "Hello " . $name . "!";
// echo "Hello $name!";
// echo 'Hello $name!';
// echo 'Hello ' . $name . '!';
// echo "Hello {$name}!";

// $number = 5;
// $fruit = "apple";
// echo "I have $number {$fruit}s";

//accessing charecters in a string
// $name = "Hello World!";
// echo $name[0];
// echo PHP_EOL;
// echo $name[1];
// echo PHP_EOL;
// echo $name[2];
// echo PHP_EOL;


// //length of a string
// echo strlen($name);
// echo PHP_EOL;

// //loop through a string
// for($i = 0; $i < strlen($name); $i++){
//     echo $name[$i];
// }
// echo PHP_EOL;
// //access part of a string
// echo substr($name, 0, 10);
// echo PHP_EOL;
// echo substr($name, 6, 5);
// echo PHP_EOL;
// echo substr($name, 6);
// echo PHP_EOL;
// echo substr($name, -6);
// echo PHP_EOL;
// echo substr($name, -6, 3);  



//find position of a string
// $name = "Hello World!";
// echo strpos($name, "World");
// echo PHP_EOL;
// echo strpos($name, "world");
// echo PHP_EOL;
// echo strpos($name, "o");
// echo PHP_EOL;
// echo strpos($name, "o", 5);
// echo PHP_EOL;
// echo strpos($name, "o", 6);
// echo PHP_EOL;
// echo strpos($name, "o", 7);
// echo PHP_EOL;

// if(strpos($name, "World") !== false){
//     echo "Found";
// }else{
//     echo "Not Found";
// }



//search and replace
$name = "Hello World!";
// echo str_replace("World", "PHP", $name);
// echo PHP_EOL;
// echo str_replace("o", "O", $name);
// echo PHP_EOL;
// echo str_replace("o", "O", $name, $count);
// echo PHP_EOL;
// echo $count;

// //replace all vowels with *
// echo str_replace(array("a", "e", "i", "o", "u"), "*", $name);

//replace a character single time
// echo substr_replace($name, "O", 4,3);
// echo PHP_EOL;
// echo substr_replace($name, "O", -6, 1);
// echo PHP_EOL;

// //replace all
// echo strtr($name, "o", "O");
//trim

// $name = "   Hello World!   ";
// echo $name;
// echo PHP_EOL;
// echo trim($name);
// echo PHP_EOL;
// echo trim($name, " !");
// echo PHP_EOL;
// echo ltrim($name);
// echo PHP_EOL;
// echo rtrim($name);

// //pad
// echo str_pad($name, 20);
// echo str_pad($name, 20, "!");
// echo str_pad($name, 20, "!", STR_PAD_LEFT);
// echo str_pad($name, 20, "!", STR_PAD_BOTH);

// //repeat
// echo str_repeat($name, 5);

// //shuffle
// echo str_shuffle($name);

//split and tokenize
// $name = "Hello World!";
// // echo str_split($name);
// print_r(str_split($name));
// print_r(str_split($name, 3));

// //explode and implode
// print_r(explode(" ", $name));
// print_r(explode("o", $name));
// print_r(explode("o", $name, 2));

// $names = array("Hello", "World!");
// echo implode(" ", $names);
// echo implode("o", $names);

// //tokenize
// $token = strtok($name, " ");
// echo $token;
// while($token !== false){
//     $token = strtok(" ");
//     echo $token;
// }


//hashing
// $name = "Hello World!";
// echo md5($name);
// echo sha1($name);
// echo crypt($name, "salt");

// //compare
// echo strcmp("Hello", "Hello");
// echo strcmp("Hello", "hello");
// echo strcmp("hello", "Hello");
// echo strcmp("Hello", "Hello World!");
// echo strcmp("Hello World!", "Hello");

// echo ord("A");
// echo chr(65);
// echo chr(97);
// echo chr(48);

// //convert to ascii
// $name = "Hello World!";
// for($i = 0; $i < strlen($name); $i++){
//     echo ord($name[$i]) . " ";
// }

// //convert to character
// $ascii = array(72, 101, 108, 108, 111, 32, 87, 111, 114, 108, 100, 33);
// for($i = 0; $i < count($ascii); $i++){
//     echo chr($ascii[$i]);
// }

//openssl encrypt and decrypt
$name = "Hello World!";
$encrypted = openssl_encrypt($name, "AES-128-ECB", "password");
echo $encrypted;

$decrypted = openssl_decrypt($encrypted, "AES-128-ECB", "password");
echo $decrypted;

//aes256
$encrypted = openssl_encrypt($name, "AES-256-ECB", "password");
echo $encrypted;

$decrypted = openssl_decrypt($encrypted, "AES-256-ECB", "password");
echo $decrypted;

//ecnrypt with salt and IV
//create iv
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length("AES-256-CBC"));

//create iv from salt
$salt = openssl_random_pseudo_bytes(8);

$encrypted = openssl_encrypt($name, "AES-256-CBC", "password", 0, $iv);
echo $encrypted;

$decrypted = openssl_decrypt($encrypted, "AES-256-CBC", "password", 0, $iv);
echo $decrypted;


//list all ciphers
// print_r(openssl_get_cipher_methods());

//list all cipher algorithms
// print_r(openssl_get_cipher_methods(true));

//des3 
// $encrypted = openssl_encrypt($name, "DES-EDE3", "password");
echo $encrypted;

$decrypted = openssl_decrypt($encrypted, "DES-EDE3", "password");
echo $decrypted; -->