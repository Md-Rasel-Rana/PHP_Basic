<?php 
$data = [
    'name' => 'John',
    'age' => 30,
    'email' => 'john@example.com',
];

extract($data);

echo $name."\n";  // Output: John
echo $age."\n";   // Output: 30
echo $email."\n"; // Output: john@example.com
echo "my name is $name and my age is $age and my email is $email";


