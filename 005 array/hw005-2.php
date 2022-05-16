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



echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Penktas uzdavinys \n");
//  Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas 
//[user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius
// nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100

$userIDs = [];
for ($i=0; $i < 3; $i++) { 
    $elementinisMasyvs = [];
    $key = rand(1, 10);
    $elementinisMasyvs[] = "user_id => $key";
    $userIDs[] = $elementinisMasyvs;
}

$placeRow = [];
for ($i=0; $i < 3; $i++) { 
    $elementinisMasyvs = [];
    $place = rand(1, 100);
    $elementinisMasyvs[] = "place_in_row => $place";
    $placeRow[] = $elementinisMasyvs;
}

print_r($userIDs);
print_r($placeRow);

$sujungtas = array_combine($userIDs, $placeRow);
print_r($sujungtas);

// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Sestas uzdavinys \n");
//  Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
//Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka


// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Septintas uzdavinys \n");
//  Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: 
//name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų
//lotyniškų raidžių, kurių ilgiai nuo 5 iki 15


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Astuntas uzdavinys \n");
//  Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: 
//generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. 
//Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite 
//atsitiktiniais skaičiais nuo 0 iki 10. 
//Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai
$is10 = [];
for ($i=0; $i < 10; $i++) { 
    $elementinisMasyvs = [];
    $j = rand(0, 5);
    if ($j == 0) {
        $is10[] = rand(0, 10);
    } else {
        for ($k = 0; $k < $j; $k++) { $elementinisMasyvs[$k] = rand(0, 10); 
        }
    $is10[] = $elementinisMasyvs;
    } 
}

print_r($is10);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Devintas uzdavinys \n"); // kaip reikia isrusiuoti???
// Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir 
//išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės
// arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
function masyvoSuma ($m) {
    $suma = 0;
    foreach($m as $value) {
        if (!is_array($value)) {
            $suma += $value;
        }
        else {
            $suma += masyvoSuma($value);
        }
    }
    return $suma;
}

echo masyvoSuma($is10);

function masyvuPalyginimas ($a, $b) {
    if (is_array($a)) {
        $a = 0;
        foreach ($a as $value) {
            $a += $value;
        }
    } else {
        $a = $a;
    }
    if (is_array($b)) {
        $b = 0;
        foreach ($b as $value) {
            $b += $value;
        }
    } else {
        $b = $b;
    }
    $a <=> $b;
}
usort($is10, 'masyvuPalyginimas');
print_r($is10);

// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Desimtas uzdavinys \n");
//  _


// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Vienuoliktas uzdavinys \n");
//  _
