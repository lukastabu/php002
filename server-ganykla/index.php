<?php
//settings

define('INSTALL', '/bit22/php/server-ganykla/');
define('DIR', __DIR__ .'/app/');
define('URL', 'http://localhost/bit22/php/server-ganykla/');
require __DIR__.'/JsonDb.php';

$db = new JsonDb('farm');

$uri = str_replace(INSTALL, '', $_SERVER['REQUEST_URI']);
$uri = explode('/', $uri);

// ROUTER

$m = $_SERVER['REQUEST_METHOD'];

if ($m == 'GET' AND count($uri) == 1 AND $uri[0] === 'animals') {

    $out = $db->showAll('farm');
}

if ($m == 'POST' && count($uri) == 1 && $uri[0] == 'animals') {
    $rawData = file_get_contents("php://input");
    
    $data = json_decode($rawData, 1);
    $db->create($data);
    $out = ['msg' => 'OK, donkey'];
}

if ($m == 'DELETE' && count($uri) == 2 && $uri[0] == 'animals') {
    
    $db->delete($uri[1]);
    $out = ['msg' => 'OK, deleted'];
}

$out = json_encode($out);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, DELETE');
header("Access-Control-Allow-Headers: Authorization, Content-Type, X-Requested-With");

echo $out;

// if (count($uri) == 2) {
//     if ($uri[0] == 'kambarys') {
//         if ($uri[1] == 1) {
//             require __DIR__ . '/app/kambarys1.php';
//         }
//         elseif ($uri[1] == 2) {
//             require __DIR__ . '/app/kambarys2.php';
//         }
//         else {
//             require __DIR__ . '/app/404.php';
//         }
//     }
//     else if($uri[0] == 'add-funds') {
//         $userId = (int) $uri[1];
//         require __DIR__ . '/app/addMoney.php';
//     }
//     else {
//         require __DIR__ . '/app/404.php';
//     }
// }
// else {
//     require __DIR__ . '/app/404.php';
// }




// print_r($_SERVER);
// print_r($uri);