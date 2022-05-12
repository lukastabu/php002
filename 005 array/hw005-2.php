<?php
echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Pirmas uzdavinys \n");
// Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų 
//masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25
$masyvs = [];
for ($i=0; $i < 10; $i++) { 
    $elementinisMasyvs = [];
    for ($j=0; $j < 5; $j++) { 
        $elementinisMasyvs[] = rand(5, 25);
    }
    $masyvs[] = $elementinisMasyvs;
}

echo '<pre>';
// print_r($masyvs);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Antras uzdavinys \n");
// a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;

$daugiau10 = 0;
$daugiau10 = 0;

foreach ($masyvs as $key => $value){
    foreach ($value as $value1) {
        if ($value1 > 10) {
            $daugiau10++;
        }
    }
}
echo "skaiciu daugiau uz 10: $daugiau10";
echo nl2br ("\n xxxxxxxxxxxxx \n");

// b) Raskite didžiausio elemento reikšmę;

$didziausias = 0;
foreach ($masyvs as $key => $value) {
    foreach ($value as $value1) {
        if ($value1 > $didziausias) {
            $didziausias = $value1;
        }
    }
}
echo "didziausia reiksme: $didziausias";
echo nl2br ("\n xxxxxxxxxxxxx \n");

// c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas
//(t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.);

$sumaIndex = [];
foreach ($masyvs as $key => $value) {
    foreach ($value as $key1 => $value1) {
        $sumaIndex[$key1] += $value[$key1]; 
    }
}
print_r($sumaIndex);



// d) Visus masyvus “pailginkite” iki 7 elementų;
// e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir
//sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė
//turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai;


// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Trecias uzdavinys \n");
// _


// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Ketvirtas uzdavinys \n");
//  _


// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Penktas uzdavinys \n");
//  _


// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Sestas uzdavinys \n");
//  _


// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Septintas uzdavinys \n");
//  _


// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Astuntas uzdavinys \n");
//  _


// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Devintas uzdavinys \n");
//  _


// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Desimtas uzdavinys \n");
//  _


// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Vienuoliktas uzdavinys \n");
//  _
