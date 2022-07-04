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

?>

<fieldset>
    <legend>CREATE / SUKURTI</legend>
    <form method="POST">
        Species: <input type="text" name="species">
        Weight: <input type="text" name="svoris">
        Type: <select name="type">
            <option value="1">Zinduolis</option>
            <option value="2">Zuvis</option>
            <option value="3">Paukstis</option>
        </select>
        <input type="hidden" name="_method" value="post">
        <button type="submit">create</button>
    </form>
</fieldset>

<fieldset>
    <legend>DELETE / ISTRINTI</legend>
    <form method="POST">
        ID: <input type="text" name="id">
        <input type="hidden" name="_method" value="delete">
        <button type="submit">delete</button>
    </form>
</fieldset>

<fieldset>
    <legend>UPDATE / REDAGUOTI</legend>
    <form method="POST">
        ID: <input type="text" name="id">
        <input type="hidden" name="_method" value="update">
        Species: <input type="text" name="species">
        <button type="submit">update</button>
    </form>
</fieldset>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CREATE
    if ($_POST['_method'] === 'post') {

        $sql = "
        INSERT INTO gyvunai
        (species, svoris, type)
        VALUES (:spe, :svo, :typ)
        ";
        $stmt = $pdo->prepare($sql); // paruosimas - prepare
        // $stmt->execute([$_POST['species'], $_POST['svoris'], $_POST['type']]); // keliauja i klaustuko vieta
        $stmt->execute([
            'spe' => $_POST['species'], 
            'svo' => $_POST['svoris'], 
            'typ' => $_POST['type']]); // keliauja i kintamuju vieta

        header('Location: http://localhost/bit22/php/034-db/');
        die;
    }


    // DELETE
    if ($_POST['_method'] === 'delete') {

        $sql = "
        DELETE FROM gyvunai
        WHERE id = ?
        ";
        $stmt = $pdo->prepare($sql); // paruosimas - prepare
        $stmt->execute([$_POST['id']]); // keliauja i klaustuko vieta
        header('Location: http://localhost/bit22/php/034-db/');
        die;
    }

    // UPDATE
    if ($_POST['_method'] === 'update') {

        $sql = "
        UPDATE gyvunai
        SET species = ?
        WHERE id = ?
        ";
        $stmt = $pdo->prepare($sql); // paruosimas - prepare
        $stmt->execute([$_POST['species'], $_POST['id']]); // keliauja i klaustuko vieta
        header('Location: http://localhost/bit22/php/034-db/');
        die;
    }

}





// READ

$sql = "
    SELECT id, species, svoris, type
    FROM gyvunai
    WHERE type = 1 OR type = 2 OR type = 3
    ORDER BY svoris DESC, species
    LIMIT 2, 2
";

$stmt = $pdo->query($sql);

$animals = $stmt->fetchAll();

echo '<ul>';
foreach ($animals as $animal) {
    echo '<li>' . $animal['id'] . ' ' . $animal['species'] . ' ' . $animal['svoris']  . ' ' . ['zinduolis', 'zuvis', 'paukstis'][$animal['type'] - 1] . '</li>';
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
foreach ($animals as $animal) {
    echo '<li>' . $animal['animal_count'] . ' ' . $animal['svoris_sum']  . ' ' . ['zinduolis', 'zuvis', 'paukstis'][$animal['type'] - 1] . '</li>';
}
echo '</ul>';
