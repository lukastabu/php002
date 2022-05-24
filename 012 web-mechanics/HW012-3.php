<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $pavad = 'HW012'; echo $pavad;?></title>
</head>

<?php 
$spalva = $_POST['inputKintams']; 
?>

<body style="background:#<?php echo $spalva;?>"
>


    <h1>Labas</h1>
    <a href="http://localhost/bit22/php/012 web-mechanics/HW012-3.php/?color=000000"><?php echo $pavad;?></a>
    <form action="" method="get">
        kokios spalvos nori? <input type="text" name="inputKintams">
        <button type="submit">GO</button>
    </form>

</body>
</html>

