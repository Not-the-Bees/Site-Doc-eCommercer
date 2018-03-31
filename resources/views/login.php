<?php $_title = "Login / Register"; ?>

<?php ob_start(); ?>

    <header>
        <h1 class="banner">Talk About Stuff</h1>
    </header>

    <div>
        <p class="text-center">Welcome to Talk About Stuff | Please Login or Register to access the website!</p>
    </div>
    <section class="container-fluid">
        <div class="row">

            <!-- Login Form -->
            <div class="col-md-6 mb-4">
                <div class="card elegant-color form-white">
                    <div class="card-body">
                        <form action="/Talk-About-Stuff/controllers/login.php" method="post">
                            <h3 class="text-center white-text py-3"><i class="fa fa-user-circle"></i> Login :</h3>
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
                <div class="card elegant-color form-white">
                    <div class="card-body">
                        <form action="/Talk-About-Stuff/controllers/login.php" method="post">
                            <h3 class="text-center white-text py-3"><i class="fa fa-user-circle"></i> Register :</h3>
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
                <p class="success"><?php if (isset($success)) { echo $success; } ?></p>
                <p class="error"><?php if (isset($errorPwd)) { echo $errorPwd; } ?></p>
            </div>
            <!--End Register Form -->

        </div>
    </section>

<?php $_content = ob_get_clean() ?>
<?php require_once __DIR__ . '/../templates/base.php';?>