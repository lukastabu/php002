<?php
echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Pirmas uzdavinys \n"); // padaryti, kad tilptu ekrane

for ($i=0; $i < 400; $i++) { 
    if (($i%50)==0) echo '<br>';
    echo '*';
}

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Antras uzdavinys \n"); 

$virs150 = 0;

for ($i=0; $i < 300; $i++) { 
    $a = rand(0, 300);
    if ($a > 150) {
        $virs150++;
    }
    echo ($a > 275) ? "<font color=red>$a </font>" : "$a ";
    // (($a > 150) ? $virs150++);
}
echo nl2br ("\n");

echo "sugeneruota $virs150 skaiciai(-iu) virs 150";

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Trecias uzdavinys \n"); // padaryti, kad gale nebutu kablelio

$a = rand(3000, 4000);

for ($i=0; $i < $a; $i++) { 
    echo ($i % 77 == 0) ? "$i, " : ""; 
}

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Ketvirtas ir penktas uzdavinys \n"); // padaryti, kad butu monospace ir gautusi kvadratiskas, ir butu ispesta antra istrizaine

for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        echo ($i==$j) ? "<font color=red>*</font>" : "*"; // || ($i== )
    }
    echo '<br>';
}


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Sestas uzdavinys \n");

$saugiklis = 100;
$rezultatai = '';
$hKiekis = 0;

do {
    if (!(--$saugiklis)) break; // su kiekviena iteracija mazina saugikli, o kei jis tampa 0 (false), ! ji padaro true ir isijungia break
    
    $moneta = (!rand(0, 1)) ? 'H' : 'S';
    if ($moneta=="H") {
        $hKiekis++;
    }
    // if (rand(0, 1)) {
    //     $moneta = 'H';
    //     $hKiekis++;
    // } else {
    // $moneta = 'S';
    //  }
    // if ($moneta=="H") {
    //     $hKiekis++;
    // }
    $rezultatai .= $moneta;
    echo $moneta;
    
} while ($moneta != 'H'); // sustos kai iskris H
// } while  ($hKiekis < 3); // sustos kai H iskris tris kartus
// } while (!strpos($rezultatai, 'HHH')); // sustos kai H iskris tris kartus is eiles

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Septintas uzdavinys \n");

$petras = 0;
$kazys = 0;
$laimetojas = '';

do {
    $petras += rand(10, 20);
    $kazys += rand(5, 25);
    if ($petras > 221) {
        $laimetojas = 'Petras';
    }
    elseif ($kazys > 221) {
        $laimetojas = 'Kazys';
    }
} while ($laimetojas=='');
if (($petras > 221) && ($kazys > 221)) {
    echo "Petras: $petras, Kazys:$kazys, partija laimejo abu 🤷‍♂️";
} else echo "Petras: $petras, Kazys:$kazys, partija laimejo $laimetojas";

// if ($petras > 221) {
//     echo "Petras: $petras, Kazys:$kazys, partija laimejo Petras";
// }
// elseif ($kazys < 221) {
//     echo "Petras: $petras, Kazys:$kazys, partija laimejo Kazys";
// }



// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Astuntas uzdavinys \n");

// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Devintas uzdavinys \n");

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Desimtas uzdavinys \n");

$visoMazuSmugiu = 0;
for ($i=0; $i < 5; $i++) { 
    $vienoViniesIkalta = 0;
    while ($vienoViniesIkalta < 85) {
        $vienoViniesIkalta += rand(5, 20);
        $visoMazuSmugiu++;
    }
}
echo "reikes $visoMazuSmugiu-iu mazu smugiu";
echo '<br>';
$visoDideliuSmugiu = 0;
for ($i=0; $i < 5; $i++) { 
    $vienoViniesIkalta = 0;
    while ($vienoViniesIkalta < 85) {
        $vienoViniesIkalta += (rand(20, 30)*rand(0, 1));
        $visoDideliuSmugiu++;
    }
}
echo "reikes $visoDideliuSmugiu-iu dideliu smugiu";



// echo nl2br ("\n xxxxxxxxxxxxx \n");
// echo nl2br ("\n Vienuoliktas uzdavinys \n");
