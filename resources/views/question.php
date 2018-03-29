<?php $_title = "Talk About Stuff - Question" ?>

<?php ob_start() ?>

    <header class="banner">
        <h1 class="title">Talk About Stuff - Question</h1>
    </header>
    <br>
    <section class="container-fluid">
        <!-- Edit button -->
        <?php if ($_SESSION['id'] === $question['user_id']) { ?>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/controllers/editQuestion.php?id=<?= $question['id']; ?>" role="button">Edit this question</a>
                </div>
                <div class="col-md-4"></div>
            </div>
        <?php } ?>
        <!-- End edit button -->

        <br>

        <!-- Question's title & content -->
        <section class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card questionCard">
                    <h2 class="card-header"><?= ucfirst($question['title']); ?></h2>
                    <div class="card-body">
                        <p class="card-text"><?= ucfirst($question['content']); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-4"></div>
        </section>
        <!-- End question's title & content -->

        <!-- Display answers -->
        <section class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card questionCard">
                    <ul>
                        <?php foreach ($answersToQuestion as $answer) { ?>
                            <div class="card-body">
                                <p class="card-text"><?php echo ucfirst($answer['content']); ?></p>
                                by <?= ucfirst(Member::find($answer['user_id'])['login']); ?>, <?= getTimeAgo($answer['created_at']); ?>.
                            </div>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Display answers -->

        <br>

        <!-- Add answer form -->
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card deep-orange form-white">
                    <div class="card-body">
                        <form action="../controllers/addAnswerToQuestion.php?question_id=<?= $question['id'] ?>"  method="post">
                            <h2 class="text-center white-text py-3"><i class="fa fa-question"></i> Your Answer :</h2>
                            <div class="md-form">
                                <i class="fa fa-keyboard prefix white-text"></i>
                                <textarea class="form-control contentTextarea" rows="5" type="text" name="answerContent" required></textarea>
                                <label>Your answer here...</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-outline-white waves-effect waves-light" name="postAnswer" type="submit">Answer it ;)</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End add answer form -->
    </section>

<?php $_layout = ob_get_clean() ?>
<?php require_once __DIR__ . '/../templates/layout.php';?>