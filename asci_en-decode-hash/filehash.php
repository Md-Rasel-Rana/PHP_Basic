<?php 
$content = file_get_contents("./asci_en-decode-hash/abcd.txt");
// echo $content;

$hash = md5($content);
echo $hash;
