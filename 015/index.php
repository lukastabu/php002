<?php
require __DIR__. '/Bebras.php';

echo 'Labas 06-02 <br>';

$bebras1 = new Bebras;
$bebras2 = new Bebras;
$bebras3 = $bebras1;
$bebras4 = clone($bebras1);

echo '<pre>';

// var_dump($bebras1);
// var_dump($bebras2);
// var_dump($bebras3);
// var_dump($bebras4);

echo $bebras1->tail;
echo '<br>';

$bebras1->tail = 'veeery long';
echo $bebras1->tail;
// echo $bebras1->age;
$bebras1->whatsAge();
$bebras2->whatsAge();

$bebras1->changeAge(36);
$bebras1->whatsAge();
