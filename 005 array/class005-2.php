<?php
echo 'MASYYYYVAI 2 dimenciniai';
echo '<br><br>';

$gyvuliai = [
    ["vardas" => "Alkinukas", "rusis" => 'arklys'],
    ["vardas" => "Borisas", "rusis" => 'kate'],
    ["vardas" => "Ciucis", "rusis" => 'suo'],
    ["vardas" => "Dobis", "rusis" => 'suo'],
    ["vardas" => "Ektaras", "rusis" => 'kate'],
];

print_r($gyvuliai);
echo '<br><br>';

foreach ($gyvuliai as $key => $value) {
    print_r($value);
}
echo '<br><br>';

foreach ($gyvuliai as $key => $value) {
    print_r($value['vardas']);
    echo ' ';
}
echo '<br><br>';

foreach ($gyvuliai as $key => $value) {
    if ('kate' == $value['rusis']) {
        print_r($value['vardas']);
        echo ' ';
    }
}
echo '<br><br>';

foreach ($gyvuliai as $key => &$value) {
    if ('Ciucis' == $value['vardas']) {
        $value['rusis'] = 'kate';
    }
}
unset($value);

print_r($gyvuliai);
echo '<br><br>';

foreach ($gyvuliai as $key => $value) {
    if ('Ciucis' == $value['vardas']) {
        $gyvuliai[$key]['rusis'] = 'suo';
    }
}
unset($value);

print_r($gyvuliai);

echo '<br><br>xxxxxxxxxxxxxx';
echo '<br><br>';

$_6x6 = [];

for ($j=0; $j < 6; $j++) { 
    $eilute = [];
    for ($i=0; $i < 6; $i++) { 
        $eilute[] = rand(6, 36);  
    }
    $_6x6[] = $eilute;
}

foreach ($_6x6 as $key => $eilute) {
    foreach ($eilute as $key => $number) {
        echo " $number ";
    }
    echo '<br>';
}

// echo '<pre>';
// print_r($_6x6);
// echo '</pre>';
