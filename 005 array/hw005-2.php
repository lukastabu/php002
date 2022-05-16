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

$sumapirmo = 0;
$sumaantro = 0;
$sumatrecio = 0;
$sumaketvirto = 0;
$sumapenkto = 0;
foreach ($masyvs as $key => $value) {
    foreach ($value as $key1 => $value1) {
        if ($key1 == 0) { $sumapirmo += $value[$key1]; }
        if ($key1 == 1) { $sumaantro += $value[$key1]; }
        if ($key1 == 2) { $sumatrecio += $value[$key1]; }
        if ($key1 == 3) { $sumaketvirto += $value[$key1]; }
        if ($key1 == 4) { $sumapenkto += $value[$key1]; }
    }
}
echo "pirmu suma yra $sumapirmo <br>
antru suma yra $sumaantro <br>
treciu suma yra $sumatrecio <br>
ketvirtu suma yra $sumaketvirto <br>
penktu suma yra $sumapenkto <br>";
echo nl2br ("\n xxxxxxxxxxxxx \n");


// d) Visus masyvus “pailginkite” iki 7 elementų;
foreach ($masyvs as $key => &$value) {
    while (sizeof($value) < 7) {
        $value[] = rand(5, 25);
    }
}
unset($value);
// print_r($masyvs);
echo nl2br ("\n xxxxxxxxxxxxx \n");

// e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir
//sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė
//turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai;


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Trecias uzdavinys \n");
// Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas
//su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. 
//Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
$masyvAZ = [];
for ($i=0; $i < 10; $i++) { 
    $raidinisMasyvs = [];
    for ($j=0; $j < rand(2, 20); $j++) { 
        $raidinisMasyvs[] = (range('A', 'Z')[rand(0, 25)]);
    }
    $masyvAZ[] = $raidinisMasyvs;
}

foreach ($masyvAZ as $key => &$value) {
    sort($value);

}
unset($value);

// print_r($masyvAZ);


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Ketvirtas uzdavinys \n");
//  Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad 
//elementai kurių masyvai trumpiausi eitų pradžioje. 
sort($masyvAZ);
print_r($masyvAZ);

//Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje



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
