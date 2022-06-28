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
    SELECT id, species, svoris, type
    FROM gyvunai
    WHERE type = 1 OR type = 3
    ORDER BY svoris DESC, species
    LIMIT 1, 1
";

$stmt = $pdo->query($sql);

$animals = $stmt->fetchAll();

echo '<ul>';
foreach ($animals as $animal)
{
    echo '<li>'.$animal['id'] . ' ' . $animal['species'] . ' ' . $animal['svoris']  . ' ' . ['zinduolis', 'zuvis', 'paukstis'][$animal['type'] - 1] . '</li>';
}
echo '</ul>';

// echo '<ul>';
// while ($row = $stmt->fetch())
// {
//     echo '<li>'.$row['id'] . ' ' . $row['species'] . ' ' . $row['svoris']  . $row['type'] . '</li>';
// }
// echo '</ul>';


$sql = "
    SELECT type, sum(svoris) AS svoris_sum, count(id) as animal_count, GROUP_CONCAT(species) AS species
    FROM gyvunai
    GROUP BY svoris DESC, species
";

$stmt = $pdo->query($sql);

$animals = $stmt->fetchAll();

echo '<ul>';
foreach ($animals as $animal)
{
    echo '<li>'. $animal['animal_count'] . ' ' . $animal['svoris_sum']  . ' ' . ['zinduolis', 'zuvis', 'paukstis'][$animal['type'] - 1] . '</li>';
}
echo '</ul>';

