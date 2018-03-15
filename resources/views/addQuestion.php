<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css Links -->
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/form.css">
    <title>TalkAboutStuff - Add New Question</title>
</head>

<body>
<section class="container-fluid">
    <section class="row">

        <!-- Add-New-Question Form -->
        <div class="col-md-6 mb-4">
            <div class="card indigo form-white">
                <div class="card-body">
                    <form action="/Talk-About-Stuff/controllers/addQuestion.php" method="post">
                        <h2 class="text-center white-text py-3"><i class="fas fa-question"></i>Your Question :</h2>
                        <div class="md-form">
                            <i class="fas fa-question-circle prefix white-text"></i>
                            <input type="text" name="question" class="form-control" required>
                            <label>Question's Title</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-keyboard prefix white-text"></i>
                            <textarea type="text" name="content" class="form-control" placeholder="Explain more here ..." required>
                            <label>Question's content</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-white waves-effect waves-light" name="postQuestion" type="submit">Ask !</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>




<!-- Script -->
<script src="/public/js/bootstrap.bundle.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/mdb.min.js"></script>
<script src="/public/js/popper.min.js"></script>
<script src="/public/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

</body>
</html>