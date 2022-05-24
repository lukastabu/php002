<?php
session_start();
// Scenarijus POST vvv
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $_SESSION['sesijosKintams'] = $_POST['inputKintams'];
    header('Location: http://localhost/bit22/php/012/form.php');
    die;
}


// Scenarijus GET vvv
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMIKĖ</title>
</head>
<body>
    <form action="" method="post">
        TAVO TELSTAS <input type="text" name="inputKintams">
        <button type="submit">GO</button>
        <?php
        echo '<br>';
        echo $_SESSION['sesijosKintams'];
        ?>
    </form>
</body>
</html>