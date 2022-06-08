<?php
const URL = '/bit22/php/012%20web-mechanics/HW012-8rose.php';
if($_SERVER['REQUEST_URI'] == URL){
    header('Location: http://localhost/bit22/php/012%20web-mechanics/HW012-8pink.php');
    die;
}

echo '<body style="background-color: IndianRed"></body>';