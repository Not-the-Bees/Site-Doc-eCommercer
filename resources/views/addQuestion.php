<?php $_title = "Talk About Stuff - Add your question" ?>

<?php ob_start() ?>

    <header class="banner">
        <h1 class="title">Talk About Stuff - Add question</h1>
    </header>

    <section class="container-fluid">
        <section class="row">

            <!-- Add-New-Question Form -->
            <div class="col-md-4 offset-md-4">
                <div class="card deep-orange form-white">
                    <div class="card-body">
                        <form action="../controllers/addQuestion.php" method="post">
                            <h2 class="text-center white-text py-3"><i class="fa fa-question"></i> Your Question :</h2>
                            <div class="md-form">
                                <i class="fa fa-question-circle prefix white-text"></i>
                                <input type="text" name="title" class="form-control" required>
                                <label>Question's Title</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-keyboard prefix white-text"></i>
                                <textarea class="form-control contentTextarea" rows="5" type="text" name="content" required></textarea>
                                <label>Explain more here...</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-outline-white waves-effect waves-light" name="postQuestion" type="submit">Ask ;)</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </section>
        <br>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/resources/views/userConnected.php" role="button">Go Back Home</a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </section>

<?php $_layout = ob_get_clean() ?>
<?php require_once __DIR__ . '/../templates/layout.php';?>