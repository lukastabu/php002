<?php

$cats = [
    'Pilkis',
    'Rainius',
    'Katis',
    'Zenonas'
];

for ($i=0; $i < 10; $i++) { 
    $cats[] = rand(10, 99);
}

$out = json_encode($cats);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");


echo $out;
