<?php
echo 'labas';
echo "<br><br>";
$apibegimai = 0;
$ziurkes = 0;
do {
    $ziurkes += rand(3,5);
    $apibegimai++;
    // echo $apibegimai, $ziurkes; Tarpinis pasitikrinimas ar veikia gerai
} while ($ziurkes < 20);
echo "Apibėgimai aplink namą: $apibegimai; <br> Pagauta žiurkių: $ziurkes;";