<?php

require __DIR__ .'/JsonDb.php';

$db = new JsonDb('farm');

$animals = ['Avis', 'Antis', 'Antilopė', 'Bulius'];


foreach(range(1, 11) as $_) {
    $animal = ['animal' => $animals[rand(0, count($animals) - 1)], 'weight' => rand(1000, 10000) / 100];
    $db->create($animal);
}