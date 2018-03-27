<?php $_title = "Talk About Stuff - Browse questions" ?>

<?php ob_start() ?>

    <header class="banner">
        <h1>Browse questions</h1>
    </header>

    <section class="container">
        <section class="row">
            <ul>
                <?php
                foreach ($questions as $question) {
                    ?>
                    <br>
                    <li>
                        <a class="displayQuestion" href="/Talk-About-Stuff/controllers/readQuestion.php?id=<?= $question['id']; ?>">
                            <?php echo strtoupper($question['title']); ?>
                        </a> by <?= ucfirst($_SESSION['login']); ?>, <?= getTimeAgo($question['created_at']); ?>.
                    </li>
                    <?php
                }
                ?>
            </ul>
        </section>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/controllers/addQuestion.php" role="button">Ask new Question</a>
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