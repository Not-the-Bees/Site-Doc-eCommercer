<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css Links -->
    <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/form.css">
    <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/style.css">
    <title>TalkAboutStuff - Browse Questions</title>
</head>
<body>

<!-- Banner -->
<section>
    <header class="banner">
        <h1>Browse questions</h1>
    </header>
</section>
<!-- End Banner -->


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
    <br>
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



<!-- Script -->
<script src="../public/js/jquery-3.2.1.min.js"></script>
<script src="/Talk-About-Stuff/public/js/bootstrap.bundle.min.js"></script>
<script src="/Talk-About-Stuff/public/js/bootstrap.min.js"></script>
<script src="/Talk-About-Stuff/public/js/mdb.min.js"></script>
<script src="/Talk-About-Stuff/public/s/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

</body>
</html>