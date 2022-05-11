<?php
echo 'MASYYYYVAI';
echo '<br><br>';

echo '<pre>';
$namas = ['andrius', 'bernardas', 'ceslovas'];
print_r($namas);
echo '<br>';
echo $namas[1];
echo '<br>';
$namas[1] = 'bronius';
echo '<br>';
echo $namas[1];
echo '<br>';
print_r($namas);
echo '<br>';

array_push($namas, 'darius');
print_r($namas);

echo '<br>';

$namas[] = 'edgaras';
print_r($namas);

echo '<br>';

array_unshift($namas, 'anakinas');
print_r($namas);

echo '<br>';

array_pop($namas);
print_r($namas);

echo '<br>';

array_shift($namas);
print_r($namas);

echo '<br>';

array_splice($namas, 1, 1); // ismetama nuo [1] pozicijos lygiai 1 narys
print_r($namas);

echo '<br>';

$namas['stogas'] = 'x-menas';
print_r($namas);

echo '<br>';
echo nl2br ("\n xxxxxxxxxxxxx \n");
echo '<br>';

$namukas = ['pirmas' => 'albinas', 42 => 'bartas', 'trecias' => 'ciceronas', 'deividas'];
print_r($namukas);

echo '<br>';

array_unshift($namukas, 'abraomas');
print_r($namukas);

echo '<br>';

array_splice($namukas, 1, 2);
print_r($namukas);

echo '<br>';

foreach ($namukas as $key => $value) {
    echo '<br>';
    echo $key, $value;
}

echo '<br>';
echo nl2br ("\n xxxxxxxxxxxxx \n");
echo '<br>';

$a = 1;
$b = $a;
$c = &$a;
echo "$a, $b, $c";
echo '<br>';

$a = 2;
echo "$a, $b, $c";
echo '<br>';

$c = 3;
echo "$a, $b, $c";
echo '<br>';

unset($c);
// $c = 4;
echo "$a, $b, $c";

echo '<br>';
echo nl2br ("\n xxxxxxxxxxxxx Mas \n");
echo '<br>';

$colors = ['geltona', 'zalia', 'raudona'];
print_r($colors);
echo '<br>';

foreach ($colors as $key => $value) {
    $colors[$key] .= '***';
}
print_r($colors);

echo '<br>';

foreach ($colors as &$value) {
    $value .= '***';
}

print_r($colors);
echo $value;
