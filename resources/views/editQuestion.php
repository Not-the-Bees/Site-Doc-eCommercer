<?php require_once '../resources/templates/meta.php'; ?>

<body>

<?php require '../resources/templates/nav.php'; ?>

<!-- Banner -->
<section>
    <header class="banner">
        <h1>Edit your question</h1>
    </header>
</section>
<!-- End Banner -->

<br>
<section class="container-fluid">
    <section class="row">

        <!-- Add-New-Question Form -->
        <div class="col-md-4 offset-md-4">
            <div class="card deep-orange form-white">
                <div class="card-body">
                    <form action="../controllers/editQuestion.php?id= <?= $question['id'] ?>" method="post">
                        <h2 class="text-center white-text py-3"><i class="fa fa-question"></i> Your Question :</h2>
                        <div class="md-form">
                            <i class="fa fa-question-circle prefix white-text"></i>
                            <input type="text" name="title" class="form-control" value="<?= $question['title']; ?>" required>
                            <label>Modify your question</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-keyboard prefix white-text"></i>
                            <textarea class="form-control contentTextarea" rows="5" type="text" name="content" required><?= $question['content']; ?></textarea>
                            <label>Modify your content</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-white waves-effect waves-light" name="editQuestion" type="submit">Edit this question</button>
                        </div>
                    </form>
                </div>
            </div>
            <p class="error"><?php if (isset($errorEdit)) { echo $errorEdit; } ?></p>
        </div>
        <div class="col-md-4"></div>
    </section>
    <br>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/resources/views/valide.php" role="button">Go Back Home</a>
        </div>
        <div class="col-md-4"></div>
    </div>ed


</section>




<!-- Script -->
<script src="../public/js/jquery-3.2.1.min.js"></script>
<script src="../public/js/bootstrap.bundle.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/mdb.min.js"></script>
<script src="../public/js/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

</body>
