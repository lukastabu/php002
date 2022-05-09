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
$h="<h$sk>$sk</h$sk>";
echo $h;

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Septintas uzdavinys \n");
$pirmas = rand(-10, 10);
$antras = rand(-10, 10);
$trecias = rand(-10, 10);

if ($pirmas<0) {
    echo "<font color=lightgreen>$pirmas</font>";
} elseif ($pirmas>0) {
    echo "<font color=blue>$pirmas</font>";
} else {
    echo "<font color=red>$pirmas</font>";
}

echo nl2br ("\n");

if ($antras<0) {
    echo "<font color=lightgreen>$antras</font>";
} elseif ($antras>0) {
    echo "<font color=blue>$antras</font>";
} else {
    echo "<font color=red>$antras</font>";
}

echo nl2br ("\n");

if ($trecias<0) {
    echo "<font color=lightgreen>$trecias</font>";
} elseif ($trecias>0) {
    echo "<font color=blue>$trecias</font>";
} else {
    echo "<font color=red>$trecias</font>";
}

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

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Vienuolikta uzdavinys \n");

$a1 = rand(1000, 9999);
$a2 = rand(1000, 9999);
$a3 = rand(1000, 9999);
$a4 = rand(1000, 9999);
$a5 = rand(1000, 9999);
$a6 = rand(1000, 9999);

$m1 = ($a1 <=> $a1) + ($a1 <=> $a2) + ($a1 <=> $a3) + ($a1 <=> $a4) + ($a1 <=> $a5) + ($a1 <=> $a6);
$m2 = ($a2 <=> $a1) + ($a2 <=> $a2) + ($a2 <=> $a3) + ($a2 <=> $a4) + ($a2 <=> $a5) + ($a2 <=> $a6);
$m3 = ($a3 <=> $a1) + ($a3 <=> $a2) + ($a3 <=> $a3) + ($a3 <=> $a4) + ($a3 <=> $a5) + ($a3 <=> $a6);
$m4 = ($a4 <=> $a1) + ($a4 <=> $a2) + ($a4 <=> $a3) + ($a4 <=> $a4) + ($a4 <=> $a5) + ($a4 <=> $a6);
$m5 = ($a5 <=> $a1) + ($a5 <=> $a2) + ($a5 <=> $a3) + ($a5 <=> $a4) + ($a5 <=> $a5) + ($a5 <=> $a6);
$m6 = ($a6 <=> $a1) + ($a6 <=> $a2) + ($a6 <=> $a3) + ($a6 <=> $a4) + ($a6 <=> $a5) + ($a6 <=> $a6);

if ($m1==5) {echo "$a1\n";}
elseif ($m2==5) {echo "$a2\n";}
elseif ($m3==5) {echo "$a3\n";}
elseif ($m4==5) {echo "$a4\n";}
elseif ($m5==5) {echo "$a5\n";}
elseif ($m6==5) {echo "$a6\n";}

if ($m1==3) {echo "$a1\n";}
elseif ($m2==3) {echo "$a2\n";}
elseif ($m3==3) {echo "$a3\n";}
elseif ($m4==3) {echo "$a4\n";}
elseif ($m5==3) {echo "$a5\n";}
elseif ($m6==3) {echo "$a6\n";}

if ($m1==1) {echo "$a1\n";}
elseif ($m2==1) {echo "$a2\n";}
elseif ($m3==1) {echo "$a3\n";}
elseif ($m4==1) {echo "$a4\n";}
elseif ($m5==1) {echo "$a5\n";}
elseif ($m6==1) {echo "$a6\n";}

if ($m1==-1) {echo "$a1\n";}
elseif ($m2==-1) {echo "$a2\n";}
elseif ($m3==-1) {echo "$a3\n";}
elseif ($m4==-1) {echo "$a4\n";}
elseif ($m5==-1) {echo "$a5\n";}
elseif ($m6==-1) {echo "$a6\n";}

if ($m1==-3) {echo "$a1\n";}
elseif ($m2==-3) {echo "$a2\n";}
elseif ($m3==-3) {echo "$a3\n";}
elseif ($m4==-3) {echo "$a4\n";}
elseif ($m5==-3) {echo "$a5\n";}
elseif ($m6==-3) {echo "$a6\n";}

if ($m1==-5) {echo "$a1\n";}
elseif ($m2==-5) {echo "$a2\n";}
elseif ($m3==-5) {echo "$a3\n";}
elseif ($m4==-5) {echo "$a4\n";}
elseif ($m5==-5) {echo "$a5\n";}
elseif ($m6==-5) {echo "$a6\n";}


/*
echo $a1;
if ($a2>$a1) {
    echo $a2.$a1;
    if ($a3>$a2) {
        echo $a3.$a2.$a1;
    } elseif ($a3>$a1) {
        echo $a2.$a3.$a1;
    } else echo $a2.$a1.$a3;
} else echo $a1.$a2;
*/

/*
if ($a1>$a2) {
    $a12 = $a1.$a2;
    if ($a3>$a1) {
        $a123=$a3.$a1.$a2;
        if ($a4>$a3){
            $a1234=$a4.$a3.$a1.$a2;
            if ($a5>$a4) {
                $a12345=$a5.$a4.$a3.$a1.$a2;
                if ($a6>$a5) {
                    $a123456 = $a6.$a5.$a4.$a3.$a1.$a2;
                } elseif ($a6>$a4) {
                    $a123456 = $a5.$a6.$a4.$a3.$a1.$a2;
                } elseif ($a6>$a3) {
                    $a123456 = $a5.$a4.$a6.$a3.$a1.$a2;
                } elseif ($a6>$a1) {
                    $a123456 = $a5.$a4.$a3.$a6.$a1.$a2;
                } elseif ($a6>$a2) {
                    $a123456 = $a5.$a4.$a3.$a1.$a6.$a2;
                } elseif ($a6<$a2) {
                    $a123456 = $a5.$a4.$a3.$a1.$a2.$a6;
                }
            } elseif ($a5>$a3) {
                $a12345=$a4.$a5.$a3.$a1.$a2;
                {
                    # code...
                }
            }
        }
        elseif ($a4>$a1) {
            $a1234 = $a3.$a4.$a1.$a2;
        } elseif ($a4>$a2) {
            $a1234 = $a3.$a1.$a4.$a2;
        } elseif ($a4<$a2) {
            $a1234 = $a3.$a1.$a2.$a4;
        }
    }
    elseif ($a3>$a2) {
        $a123=$a1.$a3.$a2;
    } elseif ($a3<$a2) {
        $a123=$a1.$a2.$a3;
    }
} elseif ($a2>$a1) {
    $a12 = $a2.$a1;
    if ($a3>$a2) {
        $a123=$a3.$a2.$a1;
        if ($a4>$a3){
            $a1234=$a4.$a3.$a2.$a1;
            if ($a5>$a4) {
                $a12345=$a5.$a4.$a3.$a2.$a1;
                if ($a6>$a5) {
                    $a123456 = $a6.$a5.$a4.$a3.$a2.$a1;
                }
            }
        }
    } elseif ($a3>$a1) {
        $a123 = $a2.$a3.$a1;
    } elseif ($a3<$a1) {
        $a123 = $a2.$a1.$a3;
    };
}

echo $a123456;
*/