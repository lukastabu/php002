<?php
$json = file_get_contents('./database.json');
$accounts = json_decode($json, true);


if (isset($_POST['camount'])) {
    $id = $_POST['camount'];
    $accounts['amount'] += $_POST['cammount'];
    file_put_contents('./database.json', json_encode($accounts, true));
    header('Location: /bit22/php/bankas/');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keisti Likuti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav>
        <a href="saskaitosKurimas.php">Kurti Saskaita</a>
        <a href="amountChange.php">Keisti Likuti</a>
    </nav>
    <?php
    if (empty($accounts)) {
        echo "Saskaitu Nera";
    } else {
    ?>
        <table class="table">
            <thead>
                <th>Vardas</th>
                <th>Pavarde</th>
                <th>iBAN</th>
                <th>AK</th>
                <th>Likutis</th>
                <th>Pokytis</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                foreach ($accounts as $id => $account) {
                ?>
                    <tr>
                        <td><?php echo $account['vardas']; ?></td>
                        <td><?php echo $account['pavarde']; ?></td>
                        <td><?php echo $account['iban']; ?></td>
                        <td><?php echo $account['ak']; ?></td>
                        <td><?php echo $account['ammount']; ?></td>
                        <td>
                            <form method="POST"><input type="text" name="camount">
                        <td><button type="submit">Keisti Likuti</button>
                            </form>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php } ?>

</body>

</html>