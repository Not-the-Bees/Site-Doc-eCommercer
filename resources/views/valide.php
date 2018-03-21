<?php session_start() ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css Links -->
    <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/form.css">
    <title>Talk About Stuff - Hello <?= ucfirst($_SESSION['login']); ?></title>
</head>

<body>

<div>
    <h1 class="connectedTitle"><?= "Hello and congrats " . "<span class='username'>" . ucfirst($_SESSION['login']) . "</span>" . ", you are now connected!"; ?></h1>
</div>

<br>
<br>
<section class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/controllers/addQuestion.php" role="button">Ask a question here!</a>
        </div>
        <div class="col-md-4"></div>
    </div>
</section>
<br>
<section class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <a class="btn btn-primary btn-lg btn-deep-orange boutonHome m-0" href="/Talk-About-Stuff/controllers/browseQuestion.php" role="button">Browse latest questions</a>
        </div>
        <div class="col-md-4"></div>
    </div>
</section>
<br>
<section class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <a class="btn btn-primary btn-lg btn-red boutonHome m-0" href="/Talk-About-Stuff/controllers/logout.php" role="button">Logout</a>
        </div>
        <div class="col-md-4"></div>
    </div>
</section>


<script src="../public/js/jquery-3.2.1.min.js"></script>
<script src="/Talk-About-Stuff/public/js/bootstrap.bundle.min.js"></script>
<script src="/Talk-About-Stuff/public/js/bootstrap.min.js"></script>
<script src="/Talk-About-Stuff/public/js/mdb.min.js"></script>
<script src="/Talk-About-Stuff/public/js/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>


</body>
