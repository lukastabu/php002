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



// READ

$sql = "
    SELECT a.id, species, weight, a.type, at.type AS at_type
    FROM animals2 AS a
    RIGHT JOIN gyvunai_types AS at
    ON a.type = at.id
";

$stmt = $pdo->query($sql);

$animals = $stmt->fetchAll();

echo '<ul>';
foreach ($animals as $animal) {
    echo '<li>' . $animal['id'] . ' ' . $animal['species'] . ' ' . $animal['weight']  . ' ' .($animal['at_type'] ? $animal['at_type'] : 'UNKNOWN') . '</li>';
}
echo '</ul>';

echo '</ul>';
