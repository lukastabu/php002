<?php
echo '<pre>';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: http://localhost/bit22/php/012%20web-mechanics/HW012-7.php?get=');
    die;
};
if(isset($_GET['get'])) {
    echo '<body style="background-color: darkgreen"></body>';
    $_SERVER['REQUEST_URI'];
}
    if(isset($_POST['post'])){
    echo '<body style="background-color: greenyellow"></body>';
}
print_r( '<div>
        <form action="" method="get">
            <button name="get">GET</button>
        </form>
        <form action="" method="post">
            <button name="post">POST (but really GET)</button>
        </form>
      </div>'); ?>