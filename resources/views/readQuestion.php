<?php $_title = "Talk About Stuff - Question" ?>

<?php ob_start() ?>

    <header class="banner">
        <h1 class="title">Talk About Stuff - Question</h1>
    </header>

    <br>
    <section class="container-fluid">
        <section class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card questionCard">
                    <h2 class="card-header"><?= ucfirst($question['title']); ?></h2>
                    <div class="card-body">
                        <p class="card-text"><?= ucfirst($question['content']); ?></p>
                        <a href="/Talk-About-Stuff/controllers/addAnswer.php" class="btn btn-primary btn-lg btn-deep-orange boutonHome m-10" role="button">Answer</a>
                        <a href="/Talk-About-Stuff/controllers/addCommentToQuestion.php" class="btn btn-primary btn-lg btn-deep-orange boutonHome m-10" role="button">Leave a comment</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-4"></div>
        </section>

        <?php if ($_SESSION['id'] === $question['user_id']) { ?>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/controllers/editQuestion.php?id=<?= $question['id']; ?>" role="button">Edit this question</a>
                </div>
                <div class="col-md-4"></div>
            </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/controllers/addCommentToQuestion.php" role="button">Add a comment</a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </section>

<?php $_layout = ob_get_clean() ?>
<?php require_once __DIR__ . '/../templates/layout.php';?>