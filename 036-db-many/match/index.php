<?php

// pastomate siuntos gali buti S, M arba L dydzio

$s = 'l';

echo "<h3> Turima $s dydzio siunta </h3>";

echo '<br>';
echo "<h3>atliekama su if:</h3>";


if ($s === 's') {
    echo '<h3> Tikrinamas S </h3>';
}
if ($s === 's' || $s === 'm') {
    echo '<h3> Tikrinamas M </h3>';
}
if ($s === 's' || $s === 'm' || $s === 'l') {
    echo '<h3> Tikrinamas L </h3>';
}
else echo '<h3> viso gero </h3>';

echo '<br>';

echo "<h3>atliekama su switch:</h3>";
switch ($s) {
    case 's':
        echo '<h3> Tikrinamas S </h3>';
    case 'm':
        echo '<h3> Tikrinamas M </h3>';
    case 'l':
        echo '<h3> Tikrinamas L </h3>';
    // break;
    default:
        echo '<h3> viso gero </h3>';
}

echo '<br>';

$a = 3;

echo "<h3>MATCH PVZ (atliekama su IF):</h3>";
if ($a == 1) {
    echo 'A';
}
elseif ($a == 2) {
    echo 'B';
}
else echo 'C';

echo '<br>';

echo "<h3>MATCH PVZ (atliekama su MATCH):</h3>";
$rez = match ($a) {
    1 => 'A',
    2 => 'B',
    default => 'C'
};
echo $rez;

$b = 21;

echo "<h3>ANTRAS MATCH PVZ (atliekama su IF):</h3>";
if ($b > 20) {
    echo 'A';
}
elseif ($b > 10) {
    echo 'B';
}
else echo 'C';

echo '<br>';

echo "<h3>ANTRAS MATCH PVZ (atliekama su MATCH):</h3>";
$rez = match (true) {
    $b > 20 => 'A',
    $b > 10 => 'B',
    default => 'C'
};
echo $rez;

echo '<br>';

echo "<h3>ANTRAS MATCH PVZ su funkncija</h3>";

function gooo($x){
    return $x > 20;
}

$rez1 = match (true) {
    gooo($b) => 'A',
    $b > 10 => 'B',
    default => 'C'
};
echo $rez1;

echo "<h3>ANTRAS MATCH PVZ su anonimine (arrow) funkncija</h3>";

$rez1 = match (true) {
    call_user_func (fn() => $b > 20) => 'A', // reik pridet call_user_func(), nes kitaip nepasileidzia funkcija
    $b > 10 => 'B',
    default => 'C'
};
echo $rez1;

