<?php

use Broool\Vaikas;

// spl_autoload_register(function ($class) {
//     require __DIR__ . '/' . $class . '.php';
// });

require __DIR__ . '/Stikline.php';
require __DIR__ . '/Cart.php';
// require __DIR__ . '/Senelis.php';
// require __DIR__ . '/Tevas.php';
// require __DIR__ . '/Vaikas.php';
require __DIR__ . '/vendor/autoload.php';

$s1 = new Stikline;
$s2 = new Stikline;
$s3 = new Stikline;

echo '<pre>';

print_r($s1);
print_r($s2);
print_r($s3);


echo '<br>';

echo Stikline::$gerimas;

$s1->kas();
Stikline::$gerimas = 'gira';
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

echo json_encode($c1);

var_dump($c1);
var_dump($c2);
var_dump($c3);

echo '<br> _________________<br>';
echo '<br> _________________<br>';

$t = new Broool\Tevas;

$t->pasaka();

$v = new Vaikas;

$v->betvarke();
$v->tvarka();
$v->pasaka();
// echo $v->posakis;
$v->senelioPosakis();
echo '<br> _______Static vs self __________<br>';

$v->istorija();

