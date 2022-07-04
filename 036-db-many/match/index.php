<?php

// pastomate siuntos gali buti S, M arba L dydzio

$s = 's';

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
echo '<br>';
echo "<h3>atliekama su switch:</h3>";
switch ($s) {
    case 's':
        echo '<h3> Tikrinamas S </h3>';
    case 'm':
        echo '<h3> Tikrinamas M </h3>';
    case 'l':
        echo '<h3> Tikrinamas L </h3>';
    default:
        echo '<h3> viso gero </h3>';
}
