<?php
echo 'labas';
echo "<br>";
echo "<br>";
$apibegimai = 0;
$ziurkes = 0;
do {
    $ziurkes += rand(3,5);
    $apibegimai++;
}
while ($ziurkes < 20);
echo "apibegimai: $apibegimai <br> pagauta ziurkiu: $ziurkes";