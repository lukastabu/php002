<?php
    if(
        (isset($_POST['vardas']) && $_POST['vardas'] != '') &&
        (isset($_POST['pavarde']) && $_POST['pavarde'] != '') &&
        (isset($_POST['iban']) && $_POST['iban'] != '') &&
        (isset($_POST['ak']) && $_POST['ak'] != '')
    ) {
        $json = file_get_contents('./database.json');
        $accounts = json_decode($json, true);
        $valid = true;
        if(!empty($accounts)) {
            foreach($accounts as $acc) {
                if($acc['ak'] === $_POST['ak']) {
                    $valid = false;
                }
            }
        }
    
        if($valid) {
            $accounts[] = $_POST;
            file_put_contents('./database.json', json_encode($accounts, true));
            header('Location: /');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naujos sąskaitos kūrimas</title>
</head>
<body>
    <h1>Naujos sąskaitos kūrimas</h1>
    <form method="POST">
        <label>Vardas:</label>
        <input type="text" name="vardas">
        <label>Pavardė:</label>
        <input type="text" name="pavarde">
        <label>Sąskaitos numeris:</label>
        <input type="text" name="iban">
        <label>Asmens kodas:</label>
        <input type="text" name="ak">
        <button type="submit">Kurti</button>
    </form>
</body>
</html>