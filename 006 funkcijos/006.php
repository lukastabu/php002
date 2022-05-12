<?php
echo 'FUUUNkcijos';
echo '<br><br>';

// funkcijos deklaravimas - gali but tik vienas
function funkcija1(){   
    echo 'sakyk rožė';
}


// funkcijos iskvietimas - gali buti daug kartu
funkcija1();
funkcija1();
echo '<br><br>';

$kintams = 'labas';

function funkcija2($var){   
    echo "$var, sakyk rožė";
}

funkcija2($kintams);

echo '<br><br>';
// nedera funkcijos viduje sukurti globaliu kintamuju
function funkcijaBLOGAI(){   
    global $globalKintams;
    echo "$globalKintams, sakyk rožė";
    $globalKintams = 'sveiki';
}

funkcijaBLOGAI();
echo $globalKintams;
echo '<br><br>';

$kintams2 = 3;
$kintams3 = 6;
function daugyba($daugiklis1, $daugiklis2)
{
    $sandauga = $daugiklis1 * $daugiklis2;
    return "<h4>$sandauga</h4>";
}

$kiekBus = daugyba($kintams2, $kintams3);
echo $kiekBus;
echo '<br>';
echo daugyba($kintams2, $kintams3);
echo '<br><br>';


function daugyba3($daugiklis1, $daugiklis2, $daugiklis3 = 2)
{
    $sandauga = $daugiklis1 * $daugiklis2 * $daugiklis3;
    return "$sandauga";
}

$kiekBusDefault = daugyba3($kintams2, $kintams3);
echo $kiekBusDefault;
echo '<br><br>';

// destruktorius - iskvieciant funkcija masyvo vertes pavercia atskirais argumentais

$masyvukas = [2, 3, 4];
echo daugyba3m(...$masyvukas); 
echo '<br>';

// konstruktorius - deklaruojant dunkcija argumentus sudeda i viena ma
function daugyba3m(...$m)
{
    $sandauga = $m[0] * $m[1] * $m[2];
    return "$sandauga";
}

echo daugyba3m(2, 3, 4);

echo '<br><br>';

function kelintas () // kiek kartu buvo prasukta
{
    $k = 0;
    $k++;
    return $k;
}

echo kelintas();
echo kelintas();
echo kelintas();
echo kelintas();

echo '<br>';

function kelintasStatic () // kiek kartu buvo prasukta
{
    static $k = 0;
    $k++;
    return $k;
}

echo kelintasStatic();
echo kelintasStatic();
echo kelintasStatic();
echo kelintasStatic();

echo '<br><br>';

$anonimine = function() {
    return 'aš esu anoniminė funkcija';
};

echo $anonimine();
// echo $anonimine;  FATAL ERROR, kvieciant tik kintamaji, kai jis pats yra funkcija
