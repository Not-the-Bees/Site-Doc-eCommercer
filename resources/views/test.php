
<?php ob_start(); ?>
<div>
    <h1 class="connectedTitle">TEST 1</h1>
</div>

<?php $content = ob_get_clean(); ?>

<?php require_once __DIR__ . '/../templates/layout.php'; ?>
