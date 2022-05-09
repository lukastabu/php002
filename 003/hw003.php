<?php
echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Pirmas uzdavinys \n");

$vardas = 'Rolandas';
$pavarde = 'Kazlas';

if (strlen($vardas) > strlen($pavarde)) {
    echo $vardas;
} else {
    echo $pavarde;
}

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Antras uzdavinys \n");

echo strtoupper($vardas), "\n", strtolower($pavarde);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Trecias uzdavinys \n");

$inicialai = "$vardas[0].$pavarde[0].";
echo $inicialai;

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Ketvirtas uzdavinys \n");

echo substr($vardas, -3), substr($pavarde, -3);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Penktas uzdavinys \n");

$american = 'An American in Paris';
$american = strtolower($american);
$american = str_replace('a', "*", $american);
$american = ucwords($american);
echo $american;

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Sestas uzdavinys \n");

$american = 'An American in Paris';
$american = strtolower($american);
$akiekis = substr_count($american, "a");
echo "pavadinime rasta $akiekis raidziu 'a'";

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Septintas uzdavinys \n");

$american = 'An American in Paris';
$breakfast = "Breakfast at Tiffany's";
$space = "2001: A Space Odyssey";
$life = "It's a Wonderful Life";
function istrintiBalses($american)
{
    $balses = ['a', 'e', 'i', 'o', 'u'];
    $american = strtolower($american);
    $american = str_replace($balses, "", $american);
    echo $american;
}
istrintiBalses($american);
echo nl2br ("\n");
istrintiBalses($breakfast);
echo nl2br ("\n");
istrintiBalses($space);
echo nl2br ("\n");
istrintiBalses($life);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Astuntas uzdavinys \n");

$star = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $star;
echo nl2br ("\n");
echo substr($star, 19, 5);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Devintas uzdavinys \n");

$menace = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$nereikia = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
//  function aaaaa($array)
// {
//     for ($i=0; $i < str_word_count($array, 0); $i++) { 
//         if (strlen($array[$i]) < 6) {
//             $array[$i] = '';
//         }
//     }
// }
// $menace1 = array_filter ($menace1, aaaaa($menace1), 0);
// // print_r(iskirptiZodzius($menace));
// print_r ($menace1);
function daugiauUz5($ieskomas)
{
$ieskomas1 = str_word_count($ieskomas, 1);
$ieskomas2 = array_filter(
    $ieskomas1,
    function ($value) {
        return strlen($value) >= 5;
    }
);
print_r ($ieskomas2);
$ieskomas3 = sizeof($ieskomas2);
echo $ieskomas3;
}

daugiauUz5($menace);
daugiauUz5($nereikia);


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Desimtas uzdavinys \n");


$n=3;
function sukurtiZodi($n) {
    $lotyniski = 'abcdefghijklmnopqrstuvwxyz';
    $stringas = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($lotyniski) - 1);
        $stringas .= $lotyniski[$index];
    }
  
    return $stringas;
}
  
echo sukurtiZodi($n);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Vienuoliktas uzdavinys \n");

$n=10;
function sukurti10($n) {
    $zodziai = $menace + $nereikia;
    $stringas = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, str_word_count($zodziai, 0));
        $stringas .= $zodziai[$index];
    }
  
    return $stringas;
}


sukurti10($n);
