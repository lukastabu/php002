<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: http://localhost/bit22/php/012%20web-mechanics/HW012-8rose.php?post=');
    die;
}

echo '<body style="background-color: pink">
<form method="post">
<button type="submit">GO TO ROSE</button>
</form>
</body>';