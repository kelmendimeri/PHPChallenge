<?php
header('Content-Type: application/json; charset=utf-8');
//review.json
$json = json_decode(file_get_contents('./review.json'), true);

$data = new RecursiveIteratorIterator(
    new RecursiveArrayIterator($json),
);

// here goes the code to be 
foreach ($data as $key => $value) {
    echo "$key => $value\n";
}
