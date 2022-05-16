<?php
echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Pirmas uzdavinys \n");
// Parašykite funkciją, kurios argumentas 
//būtų tekstas, kuris yra įterpiamas į h1 tagą
function rasykH ($a, $b=1) {
    return "<h$b>$a</h$b>";
}
echo rasykH ('labas');
echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Antras uzdavinys \n");
// Parašykite funkciją su dviem argumentais,
//pirmas argumentas tekstas, įterpiamas į h tagą,
//o antrasis tago numeris (1-6). Rašydami šią funkciją 
// remkitės pirmame uždavinyje parašytą funkciją
echo rasykH ('labas', 3);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Trecias uzdavinys \n");
// Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
//Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. 
//Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu 
//(h1 atsidaro prieš pirmą ir užsidaro po paskutinio) 
//Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją
// ir preg_replace_callback();

echo '<pre>';
$stringas = md5(time());

echo $stringas;

function h1 ($m) {
    return "<h1>$m[0]</h1>";
}

$rez = preg_replace_callback('/\d+/', 'h1', $stringas); // [0-9]+ is stringo paima visus skaicius ir ideda i masyvus po viena elementa

print_r($rez);


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Ketvirtas uzdavinys \n");
// Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių
//jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save)
//Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių
function kiekDalikliu ($sk) {
    if (!is_int($sk)) {
        return 'ivestas ne sveikasis skaicius';
    } else {
        $dalikliu = -1;
        for ($i=1; $i < $sk; $i++) { 
            if (($sk % $i) == 0) {
                $dalikliu++;
            }
        }
        return "skaicius $sk turi $dalikliu daliklius";
    }
}

echo kiekDalikliu(2000);

echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Penktas uzdavinys \n");
// Sugeneruokite masyvą iš 100 elementų, 
//kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. 
//Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, 
//panaudodami ketvirto uždavinio funkciją


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Sestas uzdavinys \n");
// 


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Septintas uzdavinys \n");
// 


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Astuntas uzdavinys \n");
// 


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Devintas uzdavinys \n");
// 


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Desimtas uzdavinys \n");
// 


echo nl2br ("\n xxxxxxxxxxxxx \n");
echo nl2br ("\n Vienuoliktas uzdavinys \n");
