<?php

require __DIR__ . '/top.php';

// function konvertuok($user) {
                
//     $ch = curl_init();

//     curl_setopt($ch, CURLOPT_URL, 'https://www.currency-api.com/base=EUR&date=2022-06-14&symbols=USD');

//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//     $output = curl_exec($ch); // siuncia, laukia, gauna

//     curl_close($ch);     

//     $output = json_decode($output);
//     // echo $user;
//     print_r($output->rates['USD']);
//     // $_SESSION['dist'] = $output->distance;
//     // return ($output->rates['UAH']*$user);
//     die;
//     }

//     konvertuok(5);


// function currencyConverter($amount) {
// 	$get = file_get_contents("https://finance.google.com/finance/converter?a=1&from=eur&to=uah");
// 	$get = explode("<span class=bld>",$get);
// 	$get = explode("</span>",$get[1]);
// 	$converted_currency = preg_replace("/[^0-9\.]/", null, $get[0]);
// 	return $converted_currency;
// }

function currency_convert($amount){
    $url = 'https://api.exchangerate-api.com/v4/latest/EUR';
    $json = file_get_contents($url);
    $exp = json_decode($json);

    $convert = $exp->rates->UAH;

    return $convert * $amount;
}

?>
<main class="main saskaitos">
    <h3>Sąskaitų sąrašas</h3>
    <?php
    require __DIR__ . '/msg.php';
    ?>
    <ul>
        <?php foreach ($users as $key => $user) : ?>   
            <li class="action1">
                <span>Sąskaitos Nr.: <span class="value"></span><?= $user['sasNr'] ?></span>
                <br>
                <span>Vardas: <span class="value"></span><?= $user['name'] ?></span>
                <br>
                <span>Pavarde: <span class="value"></span><?= $user['surname'] ?></span>
                <br>
                <span>Asmens id: <span class="value"></span><?= $user['personId'] ?></span>
                <br>
                <span>Turimos lėšos eurais: <span class="value"></span><?= $user['suma'] ?></span>
                <br>
                <span>Turimos lėšos ukrainais: <span class="value"></span><?= currency_convert($user['suma']) ?></span>
                <!-- <div>

                </div> -->

                <div class="action2">
                <form action="<?= $link.'delete/'.$user['client']?>" method="post">
                <button class="btn" type="submit">DELETE</button>
                </form>
                <a class="btn" href="<?= $link.'add/'.$user['client']?>">Pridėti lėšas</a>
                <a class="btn" href="<?= $link.'remove/'.$user['client']?>">Nuskaičiuoti lėšas</a>
                </div>
            </li>
        <?php endforeach ?>   
    
        </ul>

    <?php
    require __DIR__ . '/bottom.php';
    ?>