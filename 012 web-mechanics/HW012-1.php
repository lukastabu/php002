<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $pavad = 'HW012'; echo $pavad;?></title>
</head>

<?php if ($_GET['color'] == 1) {
        $spalva = 'style="background:red;"'; 
    } else {$spalva = 'style="background:black;"';}
?>

<body <?php echo $spalva;?>
>


    <h1>Labas</h1>
    <a href="http://localhost/bit22/php/012 web-mechanics/HW012-1.php/?color=1">color=1</a>
    <br><br>
    <a href="http://localhost/bit22/php/012 web-mechanics/HW012-1.php/"><?php echo $pavad;?></a>

</body>
</html>