<?php

$title = '';

require __DIR__ . '/top.php';
?>


<h1>Formos puslapis</h1>

<fieldset>
    <legend>Enter</legend>
    <form method="post">
    <input type="text" name="formfield">
    <button type="submit">SEND</button>
</form>
</fieldset>

<?php
require __DIR__ . '/bottom.php';