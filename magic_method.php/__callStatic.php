<?php
$data = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);

$serializedData = serialize($data);
// echo $serializedData;
print_r($serializedData);

$unserializedData = unserialize($serializedData);
print_r($unserializedData);
