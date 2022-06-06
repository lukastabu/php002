<?php

require __DIR__ . '/Stikline.php';
require __DIR__ . '/Cart.php';

$s1 = new Stikline;
$s2 = new Stikline;
$s3 = new Stikline;

echo '<pre>';

print_r($s1);
print_r($s2);
print_r($s3);


echo '<br>';

Stikline::$gerimas = 'gira';

$s1->kas();
// $s1->valio(); << nereiktu taip daryti
Stikline::valio();
$s2->kas();
$s3->kas();

echo '<br> _________________<br>';
// $c1 = new Cart;
// $c2 = new Cart;

$c1 = Cart::create();
$c2 = Cart::create();

echo '<br> _________________<br>';

$c3 = unserialize(serialize ($c1));

echo '<br> _________________<br>';

echo jason_encode ($c1);

var_dump($c1);
var_dump($c2);
var_dump($c3);
