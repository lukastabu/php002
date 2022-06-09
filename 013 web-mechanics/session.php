<?php

session_start();

$_SESSION['sesijosKintams'] = 'ate';
$_SESSION['sesijosMasyvs'] = ['viens', 'dyu'];

echo $_SESSION['sesijosKintams'];
print_r($_SESSION['sesijosMasyvs']);