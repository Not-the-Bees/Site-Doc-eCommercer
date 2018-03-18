<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css Links -->
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/form.css">
    <title>Talk About Stuff : Register/Login</title>
</head>

<!-- Banner -->
<body>
<header class="banner">
    <h1 class="title">Talk About Stuff</h1>
</header>
<!-- End Banner -->

<section class="container-fluid">
    <section class="row">

        <!-- Login Form -->
        <div class="col-md-6 mb-4">
            <div class="card indigo form-white">
                <div class="card-body">
                    <form action="/Talk-About-Stuff/controllers/login.php" method="post">
                        <h3 class="text-center white-text py-3"><i class="fa fa-user-circle"></i>Login :</h3>
                        <div class="md-form">
                            <i class="fa fa-user prefix white-text"></i>
                            <input type="text" name="login" class="form-control" required>
                            <label>Username</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix white-text"></i>
                            <input type="password" name="password" class="form-control" required>
                            <label>Password</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-white waves-effect waves-light" name="connect" type="submit">OK</button>
                        </div>
                    </form>
                </div>
            </div>
            <p class="error"><?php if (isset($error)) { echo $error; } ?></p>
        </div>
        <!-- End Login Form -->


        <!-- Register Form -->
        <div class="col-md-6 mb-4">
            <div class="card indigo form-white">
                <div class="card-body">
                    <form action="/Talk-About-Stuff/controllers/login.php" method="post">
                        <h3 class="text-center white-text py-3"><i class="fa fa-user-circle"></i>Register :</h3>
                        <div class="md-form">
                            <i class="fa fa-user prefix white-text"></i>
                            <input type="text" name="login" id="defaultForm-log" class="form-control" required>
                            <label for="defaultForm-login">Username</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-envelope prefix white-text"></i>
                            <input type="text" name="email" id="defaultForm-email1" class="form-control" required>
                            <label for="defaultForm-email1">Mail</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix white-text"></i>
                            <input type="password" name="pwd" id="defaultForm-pass1" class="form-control" required>
                            <label for="defaultForm-pass1">Password</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix white-text"></i>
                            <input type="password" name="confirm_pwd" id="defaultForm-pass2" class="form-control" required>
                            <label for="defaultForm-pass2">Password Confirmation</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-white waves-effect waves-light" type="submit" name="register">OK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Register Form -->

    </section>
</section>


<section class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <a href="" class="btn btn-primaty btn-lg btn-deep-orange boutonHome m-0">Continue without login</a>
        </div>
        <div class="col-md-4"></div>
    </div>
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