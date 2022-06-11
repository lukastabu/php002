<?php
$json = file_get_contents('./database.json');
$accounts = json_decode($json, true);

if(isset($_GET['delete']) ) {
    $id = $_GET['delete'];
    if(is_array($accounts[$id]) && $accounts[$id]['ammount'] === 0) {
        unset($accounts[$id]);
    } else {
         echo 'Trynimas negalimas';
    }
}


$data = json_encode($accounts, true);
file_put_contents('./database.json', $data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esamos Saskaitos</title>
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
            <th></th>
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
                    <td><a href="?delete=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php } ?>
</body>

</html>