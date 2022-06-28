<?php use Obankas\App; ?>
<?php if (App::auth()) : ?>
<span><?= App::authName()?></span>
<form action="" method="POST">
    <button type="submit">Logout</button>
</form>
<?php endif ?>
