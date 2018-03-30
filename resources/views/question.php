<?php $_title = "Talk About Stuff - Question" ?>

<?php ob_start() ?>

    <header class="banner">
        <h1 class="title">Talk About Stuff - Question</h1>
    </header>
    <section class="container">
        <!-- Edit/delete button -->
        <?php if ($_SESSION['id'] === $question['user_id']) { ?>
            <p class="text-center"><i class="fa fa-lightbulb">  TIPS :</i> This question is yours, you can edit or delete it with buttons above</p>
            <div class="row">
                <div class="col-md-6 ">
                    <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/controllers/editQuestion.php?id=<?= $question['id']; ?>" role="button"><i class="fa fa-edit"></i>  Edit this question</a>
                </div>
                <div class="col-md-6"><a class="btn btn-primary btn-lg btn-red boutonHome m-0" href="/Talk-About-Stuff/controllers/deleteQuestion.php?id=<?= $question['id']; ?>" role="button"><i class="fa fa-eraser"></i>  Delete this question</a>
                </div>
            </div>
        <?php } ?>
        <!-- End edit/delete button -->

        <!-- Question's title & content -->
        <section class="row mb-0">
            <div class="col-md-10 offset-md-1">
                <div class="card questionCard">
                    <h2 class="card-header"><i class="fa fa-question-circle"></i> <?= ucfirst($question['title']); ?><span class="postedStyle">     posted by <?= ucfirst(Member::find($question['user_id'])['login']); ?>, <?= getTimeAgo($question['created_at']); ?>.</span></h2>
                    <div class="card-body">
                        <p class="card-text"><?= ucfirst($question['content']); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End question's title & content -->

        <!-- Display answers -->

            <div class="col-md-10 offset-md-1">
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

        <!-- End Display answers -->

        <br>

        <!-- Add answer form -->
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card grey darken-3 form-white">
                    <div class="card-body">
                        <form action="../controllers/addAnswerToQuestion.php?question_id=<?= $question['id'] ?>"  method="post">
                            <h2 class="text-center white-text py-3"><i class="fa fa-comment"></i> Answer this question :</h2>
                            <div class="md-form">
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