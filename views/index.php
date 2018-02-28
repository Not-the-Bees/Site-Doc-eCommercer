<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../public/resources/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/resources/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../public/resources/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="../public/resources/css/style.css">
    <title>TAS : Register / Login</title>
</head>

<!-- Banner -->
<body class="background_color">
<header class="banner">
    <h1 class="title">Talk About Stuff</h1>
</header>

<section class="container-fluid">
    <section class="row">

        <!-- Login Form -->
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h2 class="title">Authentification</h2>
            <form action="../controllers/login.php" method="post">
                <label>Votre Login :</label>
                <input type="text" name="login">
                <br />
                <br />
                <label>Votre mot de passe :</label>
                <input type="password" name="password"><br />
                <input type="submit" name="connect" value="Connexion">
            </form>
        </div>
        <!-- End Login Form -->

        <!-- Register Form -->
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h2 class="title">Nouvel utilisateur, c'est par ici :</h2>
            <form action="../controllers/login.php" method="post">
                <label>Votre nom d'utilisateur :</label>
                <input type="text" name="username">
                <br />
                <br />
                <label>Votre Login (utilisé pour la connexion au site) :</label>
                <input type="text" name="login">
                <br />
                <br />
                <label>Votre mot de passe :</label>
                <input type="password" name="pwd"><br />
                <br />
                <br />
                <label>Confirmation de votre mot de passe :</label>
                <input type="password" name="confirm_pwd"><br />
                <br />
                <br />
                <label>Votre Adresse mail :</label>
                <input type="mail" name="email"><br />
                <input type="submit" name="register" value="Register">
            </form>
        </div>
    </section>
</section>

<script src="../public/resources/js/bootstrap.bundle.min.js"></script>
<script src="../public/resources/js/bootstrap.min.js"></script>

</body>
</html>