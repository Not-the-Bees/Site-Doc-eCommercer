<?php $_title = "Talk About Stuff - Edit answer" ?>

<?php ob_start() ?>

    <div>
        <header class="banner">
            <h1>Edit your answer</h1>
        </header>
    </div>
    <section class="container-fluid">
    <div class="row">
        <!-- Add-New-Question Form -->
        <div class="col-md-6 offset-md-3">
            <div class="card elegant-color form-white">
                <div class="card-body">
                    <form action="../controllers/editAnswer.php?id= <?= $answer['id'] ?>" method="post">
                        <h2 class="text-center white-text py-3"><i class="fa fa-question-circle"></i> Edit it :</h2>
                        <div class="md-form">
                            <textarea class="form-control contentTextarea" rows="5" type="text" name="content" required><?= $answer['content']; ?></textarea>
                            <label>Edit your answer</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-white waves-effect waves-light" name="editAnswer" type="submit"><i class="fa fa-fighter-jet"></i> GO !</button>
                        </div>
                    </form>
                </div>
            </div>
            <p class="error"><?php if (isset($errorEdit)) { echo $errorEdit; } ?></p>
        </div>
        <div class="col-md-4"></div>
    </div>

<?php $_layout = ob_get_clean() ?>
<?php require_once __DIR__ . '/../templates/layout.php';?>