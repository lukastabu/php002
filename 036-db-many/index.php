<?php

$host = '127.0.0.1';
$db   = 'ganyklele';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);


$sql = 'SELECT p.title AS post, t.tags AS tag, p.id AS p_id, t.id AS t_id 
FROM posts AS p
LEFT JOIN post_tag AS pt
ON pt.post_id = p.id
LEFT JOIN tags AS t
ON pt.tag_id = t.id
';

$stmt = $pdo->query($sql);

$item = $stmt->fetchAll();

// echo '<pre>';
// var_dump($item);

$out = [];

// dar neveikia vv
foreach ($item as $i) 
{
    if (!isset($out[$i['p_id']]))
    {
    $out[$i['p_id']] = ['title' => $i['post'], 'tags' => []];
    }
    $out[$i['p_id']]['tags'][$i['t_id']] = $i['tag'];
}

// echo '<ul>';
// foreach ($item as $i) {
//     echo '<li>' . $i['post'] . ' ' . $i['tag'] . '</li>';
// }
// echo '</ul>';

