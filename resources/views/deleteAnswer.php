<?php $_title = 'Talk About Stuff - Delete answer' ?>

<?php ob_start() ?>

<header class="banner">
    <h1>Delete Answer</h1>
</header>
<section class="container">
    <div class="row">
        <section class="col-md-6 offset-3">
            <h2 class="text-center"><i class="fa fa-check"></i>  Answer deleted</h2>
        </section>
        <div class="col-md-6 offset-3">
            <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/controllers/browseQuestion.php" role="button"><i class="fa fa-fighter-jet"></i>  Go to questions</a>
        </div>
    </div>
</section>


<?php $_layout = ob_get_clean() ?>
<?php require_once __DIR__ . '/../templates/layout.php'; ?>
