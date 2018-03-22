<?php require_once '../resources/templates/meta.php'; ?>

<body>

<?php require '../resources/templates/nav.php'; ?>
<header class="banner">
    <h1 class="title">Talk About Stuff - Browse Questions</h1>
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
                    <a href="/Talk-About-Stuff/controllers/addComment.php" class="btn btn-primary btn-lg btn-deep-orange boutonHome m-10" role="button">Leave a comment</a>
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
            <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/resources/views/valide.php" role="button">Back to Home</a>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row">
        <div class="col-md-4 offset-md-4">
            <a class="btn btn-primary btn-lg btn-red boutonHome m-0" href="/Talk-About-Stuff/controllers/logout.php" role="button">Logout</a>
        </div>
        <div class="col-md-4"></div>
    </div>

</section>
<!-- Script -->
<script src="../public/js/jquery-3.2.1.min.js"></script>
<script src="/Talk-About-Stuff/public/js/bootstrap.bundle.min.js"></script>
<script src="/Talk-About-Stuff/public/js/bootstrap.min.js"></script>
<script src="/Talk-About-Stuff/public/js/mdb.min.js"></script>
<script src="/Talk-About-Stuff/public/js/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

</body>
</html>