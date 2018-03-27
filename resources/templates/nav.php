<?php ob_start(); ?>
<div>
    <h1 class="connectedTitle"><?= "Hello and congrats " . "<span class='username'>" . ucfirst($_SESSION['login']) . "</span>" . ", you are now connected!"; ?></h1>
</div>

<?php $header = ob_get_clean(); ?>

<?php require_once __DIR__ . '/layout.php'; ?>
