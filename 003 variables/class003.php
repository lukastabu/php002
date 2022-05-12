<?php
$vienas = 'labas';
echo $vienas;

var_dump(false);
var_dump(true);

$r = [1, ['labas'], 3];
echo '<pre>'; // prideda HTML taga, kuris isspausdina ir struktura
print_r ($r);

echo '<pre>'; // prideda HTML taga, kuris isspausdina ir struktura
var_dump ($r);


var_dump(!'hi');       //pakeicia i logini (ir paneigia)
var_dump(!!'hi');       //pakeicia i logini (ir paneigia dukart)
var_dump((bool)'hi');   // pakeicia i logini

var_dump((int)'1');       //pakeicia stringa i skaiciu
var_dump((int)' 1');       //pakeicia stringa i skaiciu
var_dump((int)'001');       //pakeicia stringa i skaiciu
var_dump((int)'12a21');       //pakeicia stringa i skaiciu
var_dump((int)'a12');       //pakeicia stringa i skaiciu
var_dump((int)'12e14');       //pakeicia stringa i skaiciu, e ima kaip eksponentine israiska


$pvz=2;
var_dump(isset($pvz));
unset($pvz);
var_dump(isset($pvz));
$pvz=0;
var_dump(isset($pvz));
$pvz=null;
var_dump(isset($pvz));
