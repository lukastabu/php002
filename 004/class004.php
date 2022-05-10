<?php

echo 'labas <br>';

for ($i=0; $i < 3; $i++) {
    echo 'labas, '.($i+1).'-asis cikliuk!<br>';
}

echo nl2br ("\n xxxxxxxxxxxxx \n");

$saugiklis = 100;

do {
    if (!(--$saugiklis)) break; // su kiekviena iteracija mazina saugikli, o kei jis tampa 0 (false), ! ji padaro true ir isijungia break
    $moneta = rand(0, 1) ? 'Herbas' : 'Skaicius';
    echo $moneta;
} while ($moneta != 'Herbas'); // jei norim herbo - metam tol, kol neiskrenta herbas

echo nl2br ("\n xxxxxxxxxxxxx \n");

for ($i=0; $i < 3; $i++) {
    echo 'labas, '.($i+1).'-asis didelis cikle!<br>';
    for ($j=0; $j < 3; $j++) {
        echo 'labas, '.($j+1).'-asis mazas cikliuk!<br>';
    }
}

echo nl2br ("\n xxxxxxxxxxxxx \n");

for ($i=0; $i < 3; $i++) {
    echo 'labas, '.($i+1).'-asis cikliuk!<br>';
    if ($i==1) break; // breakas po atspausdinimo
}

echo nl2br ("\n xxxxxxxxxxxxx \n");

for ($i=0; $i < 3; $i++) {
    if ($i==1) break; // breakas pries atspausdinimo
    echo 'labas, '.($i+1).'-asis cikliuk!<br>';
}

echo nl2br ("\n xxxxxxxxxxxxx \n");

for ($i=0; $i < 3; $i++) {
    echo 'labas, '.($i+1).'-asis didelis cikle!<br>';
    for ($j=0; $j < 3; $j++) {
        echo 'labas, '.($j+1).'-asis mazas cikliuk!<br>';
        if ($j==1) break 2;
    }
}

echo nl2br ("\n xxxxxxxxxxxxx \n");

for ($i=0; $i < 3; $i++) {
    echo 'labas, '.($i+1).'-asis didelis cikle!<br>';
    for ($j=0; $j < 3; $j++) {
        echo 'labas, '.($j+1).'-asis mazas cikliuk!<br>';
        if ($j==1) continue 2;
    }
}
