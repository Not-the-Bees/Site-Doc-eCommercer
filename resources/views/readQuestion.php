<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css Links -->
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <title>TalkAboutStuff - <?= ucfirst($question['title']); ?></title>
</head>

<!-- Banner -->
<body>
<header class="banner">
    <h1 class="title">Talk About Stuff - Browse Questions</h1>
</header>
<!-- End Banner -->

<br>
<section class="container">
    <section class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card questionCard">
                <h2 class="card-header"><?= ucfirst($question['title']); ?></h2>
                <div class="card-body">
                    <p class="card-text"><?= ucfirst($question['content']); ?></p>
                    <a href="" class="btn btn-primary btn-large btn-deep-orange boutonHome m-0">Answer</a>
                    <a href="" class="btn btn-primary btn-large btn-deep-orange boutonHome m-0">Leave a comment</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 offset-md-4"></div>
    </section>
</section>

<!-- Script -->
<script src="../public/js/bootstrap.bundle.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/mdb.min.js"></script>
<script src="../public/js/popper.min.js"></script>
<script src="../public/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

</body>
</html>