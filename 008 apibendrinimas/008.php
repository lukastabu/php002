<?php
echo 'Apibendrinimas';
echo '<br><br>';
echo '<pre>';
echo preg_replace_callback(
    '/(.)(\d+)(d+)/',                    // iesko ne rand operatoriaus, bet jo sugeneruoto elemonto (siuo atveju - digit)
    'ieskoma',
    'abc'.rand(100, 999).'def');

echo '<br><br>';

function ieskoma ($m) {
    print_r ($m);
    return '-'.$m[0].'-';
}

echo '<br><br>';
echo 'xxxxxxxxxxxxxx';
echo '<br><br>';

$skm = [5, 5, 2, 8, 7, 3, 1];

$skm1 = array_slice($skm, -3, 3);

print_r($skm1);

echo '<br><br>';
echo 'xxxxxxxxxxxxxx';
echo '<br><br>';
// uzduotis: rand nuo 100iki 999. Parašyti 3 funkcijas, sudėti jas į masyvą, 
//tą masyvą praforyčinti ir kaip argumentą panaudoti sugeneruota rand. 
//Funk daugina ir spausdina gautą argumentą 3, 5, 7 atitinkamai
$sk = rand(100, 999);

$afun3 = 'dauginkIs3';
function dauginkIs3($var)
{
    return $var = $var*3;
};

$afun5 = 'dauginkIs5';
function dauginkIs5($var)
{
    return $var = $var*5;
};

$afun7 = 'dauginkIs7';
function dauginkIs7($var)
{
    return $var = $var*7;
};

$funmasyvas = [$afun3, $afun5, $afun7];
foreach ($funmasyvas as $value) {
    echo $value($sk).'<br><br>';
}

$funkcijuMasyvas = [];

array_push($funkcijuMasyvas,
fn($a) => $a * 3,
fn($a) => $a * 5,
fn($a) => $a * 7,
);

foreach ($funkcijuMasyvas as $value) {
    echo $value($sk).'<br><br>';
}

// dabar pakeisti taip, kad kiekvienos funkcijos rezultatas funkciju masyve pakeistu ja pacia
foreach ($funkcijuMasyvas as &$value) {
    $value = $value($sk);
}

print_r($funkcijuMasyvas);

echo '<br><br>';
echo 'xxxxxxxxxxxxxx';
echo '<br><br>';

function gen_one_to_three() {
    for ($i = 0; $i < 10; $i++) {
        // Note that $i is preserved between yields.
        yield $i => rand(100, 1000);
    }
}


foreach (gen_one_to_three() as $key => $value) {
    echo "$key => $value <br>";
}

$transport = ['foot', 'bike', 'car', 'plane'];

echo '<br>';
echo current($transport);
echo '<br>';
echo next($transport);
echo '<br>';
echo current($transport);
echo '<br>';
next($transport);
echo next($transport);
echo '<br>';
echo prev($transport);
echo '<br>';
echo current($transport);
echo '<br>';
prev($transport);
echo prev($transport);
echo '<br>';
echo end($transport);
echo '<br>';
echo reset($transport);

