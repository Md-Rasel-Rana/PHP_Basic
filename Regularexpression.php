<?php

$text = "The quick brown fox jumps over the lazy dog.";
if (preg_match("/\b\w{5}\b/", $text, $matches)) {
    echo "Five-letter word: " . $matches[0]; // Outputs "Five-letter word: quick"
}
