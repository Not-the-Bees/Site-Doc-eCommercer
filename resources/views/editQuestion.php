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
                    <form action="../controllers/editQuestion.php" method="post">
                        <h2 class="text-center white-text py-3"><i class="fa fa-question"></i> Your Question :</h2>
                        <div class="md-form">
                            <i class="fa fa-question-circle prefix white-text"></i>
                            <input type="text" name="title" class="form-control" required>
                            <label><?= $question['title']; ?></label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-keyboard prefix white-text"></i>
                            <textarea class="form-control contentTextarea" rows="5" type="text" name="content" required></textarea>
                            <label><?= $question['content']; ?></label>
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
    </div>


</section>




<!-- Script -->
<script src="/Talk-About-Stuff/public/js/bootstrap.bundle.min.js"></script>
<script src="/Talk-About-Stuff/public/js/bootstrap.min.js"></script>
<script src="/Talk-About-Stuff/public/js/mdb.min.js"></script>
<script src="/Talk-About-Stuff/public/js/popper.min.js"></script>
<script src="/Talk-About-Stuff/public/s/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

</body>
