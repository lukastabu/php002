<?php

define('KEY', 1);

echo __DIR__;

include __DIR__.'./another/part.php';

echo KEY;

include __DIR__.'./another/part.php';

include __DIR__.'./and-another/nexttwo.php';