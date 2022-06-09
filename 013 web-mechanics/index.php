<?php

define('KEY', 1);

echo __DIR__;

require __DIR__.'./another/part.php';

echo KEY;

require __DIR__.'./another/part.php';

require __DIR__.'./and-another/nexttwo.php';

echo '<br><br>';

$data = require __DIR__.'/data.php';

print_r($data);