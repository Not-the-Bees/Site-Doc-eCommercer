<?php $_title = "Talk About Stuff - Add your question" ?>

<?php ob_start() ?>

    <header class="banner">
        <h1 class="title">Add question</h1>
    </header>
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card deep-orange form-white">
                    <div class="card-body">
                        <form action="../controllers/addQuestion.php" method="post">
                            <h2 class="text-center white-text py-3"><i class="fa fa-question-circle"></i> Your Question :</h2>
                            <div class="md-form">
                                <input type="text" name="title" class="form-control" required>
                                <label>Question's Title</label>
                            </div>
                            <div class="md-form">
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
        </div>
    </section>

<?php $_layout = ob_get_clean() ?>
<?php require_once __DIR__ . '/../templates/layout.php';?>