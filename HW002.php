<?php
echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Pirmas uzdavinys \n");

$vardas = 'Jonas';
$pavarde = 'Vienaragevicius';
$gimtadienis = 1999;
$dabar = date("Y"); // pilnas datps formatas y/m/d || y mazoji - 22, Y didzioji - 2022
$amzius = $dabar - $gimtadienis;
echo "Aš esu $vardas $pavarde. Man yra $amzius metai(ų). \n";

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Antras uzdavinys \n");

$pirmas = rand(0, 4);
$antras = rand(0, 4);
echo $pirmas, $antras;
if ($pirmas == 0 || $antras == 0) echo 'vienas is skaiciu lygus nuliui ir dalyva is jo negalima';
elseif ($pirmas == $antras) echo 'skaiciai lygus';
elseif ($pirmas > $antras) $suma=($pirmas/$antras);
elseif ($pirmas < $antras) $suma=($antras/$pirmas);
echo round($suma, 2);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Trecias uzdavinys \n");

$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);
echo nl2br ("$pirmas \n $antras \n $trecias \n vidurinis skaicius yra:");
if ($pirmas > $antras && $pirmas < $trecias) echo $pirmas;
elseif ($antras > $pirmas && $antras < $trecias) {
    echo $antras;
}
else {
    echo $trecias;
}

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Ketvirtas uzdavinys \n");

$pirmas = rand(1, 10);
$antras = rand(1, 10);
$trecias = rand(1, 10);
echo nl2br ("$pirmas \n $antras \n $trecias \n trikampi sudaryti ");
if (($pirmas < $antras + $trecias)
    && ($antras < $pirmas + $trecias)
    && ($trecias < $pirmas + $antras)) {
    echo 'pavyks';}
    else echo 'nepavyks';

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Penktas uzdavinys \n");

$pirmas = rand(0, 2);
$antras = rand(0, 2);
$trecias = rand(0, 2);
$ketvirtas = rand(0, 2);
$nuliu=0;
$vienetu=0;
$dvejetu=0;

if ($pirmas == 0) $nuliu++;
elseif ($pirmas == 1) $vienetu++;
elseif ($pirmas == 2) $dvejetu++;

if ($antras == 0) $nuliu++;
elseif ($antras == 1) $vienetu++;
elseif ($antras == 2) $dvejetu++;

if ($trecias == 0) $nuliu++;
elseif ($trecias == 1) $vienetu++;
elseif ($trecias == 2) $dvejetu++;

if ($ketvirtas == 0) $nuliu++;
elseif ($ketvirtas == 1) $vienetu++;
elseif ($ketvirtas == 2) $dvejetu++;
echo "nuliu:$nuliu, vienetu:$vienetu, dvejetu:$dvejetu";

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Sestas uzdavinys \n");

$sk=rand(1, 6);
$h="?><h$sk>$sk</h$sk><?php";
echo $h;

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Septintas uzdavinys \n");
$pirmas = rand(-10, 10);
$antras = rand(-10, 10);
$trecias = rand(-10, 10);

echo "<div sstyle='color:red'></div>";

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Astuntas uzdavinys \n");
$zv = rand(5, 3000);
$kaina = 1;
$suma = $zv * $kaina;
if ($suma > 1000) {
    $kaina = 0.97;
    $suma = $zv * $kaina;
}

if ($suma > 2000) {
    $kaina = 0.96;
    $suma = $zv * $kaina;
}
echo "perkama $zv vnt zvakiu uz $kaina eur. bendra suma yra $suma eur";

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Devintas uzdavinys \n");
$pirmas = rand(0, 100);
$antras = rand(0, 100);
$trecias = rand(0, 100);
$kiekis = 3;
$vidurkis = ($pirmas + $antras + $trecias)/$kiekis;
echo nl2br ("$pirmas \n $antras \n $trecias \n vidurkis yra: ");
echo round($vidurkis, 2);

if ($pirmas < 10 || $pirmas > 90) {
    $pirmas = 0;
    $kiekis--;
}
if ($antras < 10 || $antras > 90) {
    $antras = 0;
    $kiekis--;
}
if ($trecias < 10 || $trecias > 90) {
    $trecias = 0;
    $kiekis--;
}
$vidurkis2=($pirmas + $antras + $trecias)/$kiekis;
echo nl2br ("\n vidurkis atmetus yra: ");
echo round($vidurkis2, 2);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Desimtas uzdavinys \n");

$val = rand(0, 23);
$min = rand(0, 59);
$sek = rand(0, 59);
echo "dabar yra $val valandu $min minuciu ir $sek sekundziu";
$plius = rand(0, 300);
$sek1 = $sek + $plius;
$min1 = floor($sek1/60);
$sek2 = $sek1 - ($min1*60);
$min2 = $min + $min1;
$min3 = $min2 % 60;
$val1 = $val + floor($min2/60);
if ($val1 > 23) {$val1=0;}
echo ", o pridėjus $plius sekundziu, bus $val1 valandu $min3 minuciu ir $sek2 sekundziu";
