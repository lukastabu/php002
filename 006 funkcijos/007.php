<?php
echo 'FUUUNkcijos 2';
echo '<br><br>';

// 
echo '<pre>';
$stringas = md5(time());

echo $stringas;

$rez = preg_replace_callback('/\d+/', 'h1', $stringas); // [0-9]+ is stringo paima visus skaicius ir ideda i masyvus po viena elementa

print_r($rez);

function h1 ($m) {
    print_r($m);
    return "<h1>$m[0]</h1>";
}

function sumine ($a, $b)    // a - skaicius, b - funkcija
{
    return $b($a);
}

echo '<br><br>';
echo sumine(5, fn($x) => $x*3); // b vienokia funkcija

echo '<br><br>';
echo sumine(5, fn($x) => ++$x); // b kitokia funkcija

echo '<br><br>';
function meska ($c) {
    return $c * 10;
}

echo sumine(5, 'meska'); // idedama vardine funkcija
echo '<br><br>';

function zuikis() {       // funkcija su anonimine funkcija viduje
    return fn() => 123;
}

echo zuikis()(); // paleidziamas funkcijos rezultatas (ta vidine anonimine funkcija)
echo '<br><br>';

$kiskis = fn() => fn() => 321;  // anonimine funkcija su kita anonimine funkcija viduje
echo $kiskis()(); // paleidziamas anonimines funkcijos rezultatas
echo '<br><br>';

echo '<br>Anonimine rekursine funkcija<br>';

function recursive($num){
    echo 'IN'.$num, '<br>';
    if($num < 5){
        //Kviečiame save. Padidiname numerį vienetu.
        return recursive($num + 1);
    }
    echo 'OUT'.$num, '<br>';
}
$startNum = 1;
recursive($startNum);
echo '<br><br>';

$rm = [
    3,
    [6, 4, [
        8, 1, [
            2, 2
        ], 8
    ], 9]
];

print_r($rm);

echo '<br><br>';

// rm reiksme gali tureti bet kokios dimensijos masyva, funkcija budama rekursine visada paskaiciuos

function arejausSuma($masyvas) {
    $suma = 0;
    foreach($masyvas as $value) {
        if (!is_array($value)) {
            $suma += $value;
        }
        else {
            $suma += arejausSuma($value);
        }
    }
    return $suma;
}

echo arejausSuma($rm);

echo '<br><br>';
echo '<br>usort<br>';

$masyvas = [
    ['a','d'],
    ['v','e'],
    ['a','c'],
    ['s','r'],
];

// usort($masyvas, function($a, $b){    // paprastai aprasytas usort
//     return $a[1] <=> $b[1];
// });

usort($masyvas, fn($a, $b) => $a[0] <=> $b[0]);   // arrpw function aprasytas usort

print_r($masyvas);