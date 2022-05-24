<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $pavad = 'HW012'; echo $pavad;?></title>
</head>

<?php 
$spalva = $_GET['color']; 
// else {$spalva = 'black';
?>

<body style="background:#<?php echo $spalva;?>"
>


    <h1>Labas</h1>
    <a href="http://localhost/bit22/php/012 web-mechanics/HW012-2.php/?color=59CE94">ŽALTVYKSTĖ</a>
    <br><br>
    <a href="http://localhost/bit22/php/012 web-mechanics/HW012-2.php/?color=000000"><?php echo $pavad;?></a>

</body>
</html>

