<?php ob_start(); ?>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/Talk-About-Stuff/controllers/login.php">TALK ABOUT STUFF</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/Talk-About-Stuff/controllers/profile.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">PROFILE</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                QUESTIONS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/Talk-About-Stuff/controllers/browseQuestion.php">BROWSE QUESTIONS</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/Talk-About-Stuff/controllers/addQuestion.php">ADD YOUR QUESTION</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Talk-About-Stuff/controllers/logout.php">LOGOUT</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">SEARCH</button>
                    </form>
                </div>
            </nav>
        </header>

        <main>
            <?= $_layout ?>
        </main>


        <footer>
            <section id="footer">
                <div class="container">
                    <div class="row text-center text-xs-center text-sm-left text-md-left">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>Quick links</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>Quick links</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>Quick links</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                                <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                                <li><a href="" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                            <ul class="list-unstyled list-inline social text-center">
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        </hr>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                            <p>Talk About Stuff - Paris</p>
                            <p class="h6">&copy<a class="text-green ml-2" href="" target="_blank">Talk About Stuff</a></p>
                        </div>
                        </hr>
                    </div>
                </div>
            </section>
        </footer>

<?php $_content = ob_get_clean(); ?>
<?php require_once __DIR__ . '/base.php'; ?>
