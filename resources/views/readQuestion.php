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
    <link rel="stylesheet" type="text/css" href="../public/css/form.css">
    <title>TalkAboutStuff - <?= ucfirst($question['title']); ?></title>
</head>

<!-- Banner -->
<body>
<header class="banner">
    <h1 class="title"><?= ucfirst($question['title']); ?></h1>
</header>
<!-- End Banner -->
<section class="container">
    <section class="row">
        <div class="text-center">
        <div class="card text-center">
            <h2 class="card-header"><?= ucfirst($question['content']); ?></h2>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        </div>
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