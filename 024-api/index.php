<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.distance24.org/route.json?stops='.$_POST['from'].'|'.$_POST['to']);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($ch); // siuncia, laukia, gauna

curl_close($ch);     

$output = json_decode($output);

$_SESSION['dist'] = $output->distance;
$_SESSION['img1'] = $output->stops[0]->wikipedia->image;

header('Location: http://localhost/bit22/php/024-api/');
die;}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $dist = $_SESSION['dist'] ?? '';
    $img1 = $_SESSION['img1'] ?? '';
    unset($_SESSION['dist'], $_SESSION['img1']);
    ?>
    <form action="" method="post">
        from: <input type="text" name="from">
        to: <input type="text" name="to">
        <button type="submit">CALC</button>
    </form>
    <h2><?= $dist ?></h2>
    <?php if( $img1): ?>

        <img src="<?= $img1 ?>">

    <?php endif ?>
    <?php
}