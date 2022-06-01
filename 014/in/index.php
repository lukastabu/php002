<?php

echo 'Labas 06-01';

echo 'durys <pre>';

define('INSTALL', '/bit22/php/014/in/');

$uri = str_replace(INSTALL, '', $_SERVER['REQUEST_URI']);

$uri = explode('/', $uri);

print_r($uri);

// print_r($_SERVER);

if (count($uri) > 0);