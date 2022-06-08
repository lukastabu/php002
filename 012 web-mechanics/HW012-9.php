<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
header('Location: http://localhost/bit22/php/012%20web-mechanics/HW012-9.php');
die;
}
if (isset ($_POST["button1"])){
    echo '<body style="background-color: white; color: black"></body>';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: black; color: greenyellow">
    <form id="p" method="post">
        <button type="submit" name="button1" form="p" onclick=t>SUBMIT</button>
       <?php
       function r(){
           $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
           $r = rand(3,10);
           for ($i = 0; $i < $r; $i++){
               ?>
               <div>
               <input type="checkbox" id="<?php echo $i ?>" name="ch<?php echo $i ?>" value="<?php echo $i ?>">
               <label for="ch<?php echo $i ?>"> <?php echo $characters[$i] ?></label><br>
               </div>
            <?php
           }
       }
       r();
       $checked_arr = [];
       $checked_arr = $_POST['checkbox'];
       $count = count($checked_arr);
       echo "Shichia ".$count." checkbox(u) yra pachekinta";
       ?>
    </form>
</body>
</html>