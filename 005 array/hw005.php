<?php
echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Pirmas uzdavinys \n");
//Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29),
// kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$a = [];
for ($i=0; $i < 30; $i++) { 
    $a[] += rand(5, 25);
}
print_r($a);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Antras uzdavinys \n");
// a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;

$daugiau10 = 0;
foreach ($a as $key => $value) {
    if ($a[$key] > 10) {
        $daugiau10++;
    }
}
echo "skaiciu daugiau uz 10: $daugiau10";
echo nl2br ("\n xxxxxxxxxxxxx \n");

// b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
$didziausias = 0;
$didziausiokey = "";
foreach ($a as $key => $value) {
    if ($a[$key] > $didziausias) {
        $didziausias = $a[$key];
        $didziausiokey = "$key";
    } elseif ($a[$key] == $didziausias) {
        $didziausias = $a[$key];
        $didziausiokey .= ", $key";
    }
}
echo "didziausia reiksme: $didziausias, didziausios reiksmes indeksas masyve: $didziausiokey";
echo nl2br ("\n xxxxxxxxxxxxx \n");

// c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;

$lyginiuSuma = 0;
foreach ($a as $key => $value) {
    if (($key % 2) == 0) {
        echo "$key ";
        $lyginiuSuma += $a[$key];
    }
}
echo "indeksu reiksmiu suma: $lyginiuSuma";
echo nl2br ("\n xxxxxxxxxxxxx \n");

// d) Sukurkite naują masyvą, kurio reikšmės yra 
//1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

$reiksmeMinusIndex = [];
foreach ($a as $key => $value) {
    $reiksmeMinusIndex[] = ($a[$key] - $key);
}
print_r ($reiksmeMinusIndex);
echo nl2br ("\n xxxxxxxxxxxxx \n");

// e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25,
//kad bendras masyvas padidėtų iki indekso 39
$a1 = $a;
for ($i=0; $i < 10; $i++) { 
    $a1[] += rand(5, 25);
}
print_r($a1);

echo nl2br ("\n xxxxxxxxxxxxx f) \n");

// f) Iš masyvo elementų sukurkite du naujus masyvus. 
//Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių


$poriniaiIndex = [];
$neporiniaiIndex = [];
foreach ($a as $key => $value) {
    if (($key % 2) == 0) {
        $poriniaiIndex[] = $a[$key];
    } else {
        $neporiniaiIndex[] = $a[$key];
    }
}
print_r ($poriniaiIndex);
echo nl2br ("\n xxxxxxxxxxxxx \n");
print_r ($neporiniaiIndex);

echo nl2br ("\n xxxxxxxxxxxxx \n");

// g) Pirminio masyvo elementus su poriniais indeksais padarykite
// lygius 0 jeigu jie didesni už 15vus. 
$a2=$a;
foreach ($a2 as $key => $value) {
    if (($key % 2) == 0) {
        if (($a2[$key] > 15)) {      // visus lyginius vercia i nuli
            $a2[$key] = 0;
        }
    }
}
print_r ($a2);
echo nl2br ("\n xxxxxxxxxxxxx \n");

// h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10

$pirmas10 = -1;
foreach ($a as $key => $value) {
    if ($a[$key] == 10) {
        $pirmas10 = $key;
    }
}
echo ($pirmas10 == -1) ? 'masyve nera reiksmes 10' :"pirma 10 reiksme: $pirmas10 indekse";
echo nl2br ("\n xxxxxxxxxxxxx \n");

// i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Trecias uzdavinys \n");
//Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. 
//Suskaičiuokite kiek yra kiekvienos raidės;

$abc = [];
$raidziuA = 0;
$raidziuB = 0;
$raidziuC = 0;
$raidziuD = 0;
for ($i=0; $i < 200; $i++) { 
    $randomSkaicius = rand(1, 4);
    if ($randomSkaicius == 1) {
        $randomRaide = 'a';
        $raidziuA++;
    }
    elseif ($randomSkaicius == 2) {
        $randomRaide = 'b';
        $raidziuB++;
    } 
    elseif ($randomSkaicius == 3) {
        $randomRaide = 'c';
        $raidziuC++;
    }
    elseif ($randomSkaicius == 4) {
        $randomRaide = 'd';
        $raidziuD++;
    }
    $abc[] = $randomRaide;
}
// print_r($abc);
echo "A: $raidziuA<br>B: $raidziuB<br>C: $raidziuC<br>D: $raidziuD";

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Ketvirtas uzdavinys \n");
//Išrūšiuokite 3 uždavinio masyvą pagal abecėlę

$abcSorted = $abc;
sort($abcSorted);
// print_r($abcSorted);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Penktas uzdavinys \n");
//Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
// Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
// Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir 
// kiek unikalių kombinacijų gavote

/*
function genAbc (abccc)
{
    for ($i=0; $i < 200; $i++) { 
        $randomSkaicius = rand(1, 4);
        if ($randomSkaicius == 1) {
            $randomRaide = 'a';
        }
        elseif ($randomSkaicius == 2) {
            $randomRaide = 'b';
        } 
        elseif ($randomSkaicius == 3) {
            $randomRaide = 'c';
        }
        elseif ($randomSkaicius == 4) {
            $randomRaide = 'd';
        }
        $abccc[] = $randomRaide;
    }
}
genAbc(abc1);
print_r(abc1);

*/
$abc1 = [];
for ($i=0; $i < 200; $i++) { 
    $randomSkaicius = rand(1, 4);
    if ($randomSkaicius == 1) {
        $randomRaide = 'a';
        $raidziuA++;
    }
    elseif ($randomSkaicius == 2) {
        $randomRaide = 'b';
        $raidziuB++;
    } 
    elseif ($randomSkaicius == 3) {
        $randomRaide = 'c';
        $raidziuC++;
    }
    elseif ($randomSkaicius == 4) {
        $randomRaide = 'd';
        $raidziuD++;
    }
    $abc1[] = $randomRaide;
}

$abc2 = [];
for ($i=0; $i < 200; $i++) { 
    $randomSkaicius = rand(1, 4);
    if ($randomSkaicius == 1) {
        $randomRaide = 'a';
        $raidziuA++;
    }
    elseif ($randomSkaicius == 2) {
        $randomRaide = 'b';
        $raidziuB++;
    } 
    elseif ($randomSkaicius == 3) {
        $randomRaide = 'c';
        $raidziuC++;
    }
    elseif ($randomSkaicius == 4) {
        $randomRaide = 'd';
        $raidziuD++;
    }
    $abc2[] = $randomRaide;
}

$abc3 = [];
for ($i=0; $i < 200; $i++) { 
    $randomSkaicius = rand(1, 4);
    if ($randomSkaicius == 1) {
        $randomRaide = 'a';
        $raidziuA++;
    }
    elseif ($randomSkaicius == 2) {
        $randomRaide = 'b';
        $raidziuB++;
    } 
    elseif ($randomSkaicius == 3) {
        $randomRaide = 'c';
        $raidziuC++;
    }
    elseif ($randomSkaicius == 4) {
        $randomRaide = 'd';
        $raidziuD++;
    }
    $abc3[] = $randomRaide;
}

$abcMerged = [];
foreach ($abc1 as $key => $value) {
    $abcMerged[] = $abc1[$key].$abc2[$key].$abc3[$key];
}

// print_r($abcMerged);

$abcCounted = array_count_values($abcMerged);

print_r($abcCounted);

$abcUnique = 0;
$abcRepeating = 0;
foreach ($abcCounted as $key => $value) {
    if ($value == 1 ) {
        $abcUnique++;
    } else {
        $abcRepeating++;
    }
}

echo "unikaliu: $abcUnique<br>pasikartojanciu: $abcRepeating";

// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Sestas uzdavinys \n");

// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Septintas uzdavinys \n");

// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Astuntas uzdavinys \n");

// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Devintas uzdavinys \n");

// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Desimtas uzdavinys \n");

// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Vienuoliktas uzdavinys \n");
