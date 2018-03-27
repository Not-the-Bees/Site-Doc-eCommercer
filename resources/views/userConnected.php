<?php $_title = "Talk About Stuff - Hi " . ucfirst($_SESSION['login']) ?>

<?php ob_start() ?>

<div>
    <h1 class="connectedTitle"><?= "Hello and congrats " . "<span class='username'>" . ucfirst($_SESSION['login']) . "</span>" . ", you are now connected!"; ?></h1>
</div>

<br>
<section class="container">

    <div class="row">
        <div class="col-md-4 offset-md-4">
            <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/controllers/addQuestion.php" role="button">Ask a question here!</a>
        </div>
        <div class="col-md-4"></div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-4 offset-md-4">
            <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/controllers/browseQuestion.php" role="button">Browse latest questions</a>
        </div>
        <div class="col-md-4"></div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-4 offset-md-4">
            <a class="btn btn-primary btn-lg btn-red boutonHome m-0" href="/Talk-About-Stuff/controllers/logout.php" role="button">Logout</a>
        </div>
        <div class="col-md-4"></div>
    </div>
</section>

<?php $_layout = ob_get_clean() ?>
<?php require_once __DIR__ . '/../templates/layout.php';?>
