<?php

use BankasV2\Converter as Converter;
require __DIR__ . '../../services/Converter.php';

require __DIR__ . '/top.php';
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
                <span>Turimos lėšos ukrainais: <span class="value"></span><?= Converter::currency_convert($user['suma']) ?></span>

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