<?php
require __DIR__.'/top.php';
?>
<main>
<h1>Ganyklos gyventojai</h1>
<ul>
        <?php foreach ($users as $key => $user) : ?>   
            <li class="action1">
                <span class="value"><?= $user['animals'] ?></span>
                <span class="value"><?= $user['svoris'] ?> kg</span>

                <div class="action2">
                <form action="<?= '//localhost/bit22/php/ganykla/public/delete/'.$user['id']?>" method="post">
                <button class="btn" type="submit">DELETE</button>
                </form>
                <a class="btn" href="<?= '//localhost/bit22/php/ganykla/public/edit/'.$user['id']?>">EDIT</a>
                </div>
            </li>
        <?php endforeach ?>   
        </ul>
<?php
require __DIR__.'/bottom.php';
?>