<?php $_title = "Talk About Stuff - Hi " . ucfirst($_SESSION['login']) ?>

<?php ob_start() ?>

<div>
    <h1 class="connectedTitle"><?= "<span class='username'>" . ucfirst($_SESSION['login']) . "</span>" . "'s profile"; ?></h1>
</div>
<br>
<h2 class="connectedTitle">You have currently X reputation points!</h2>
<br>
<h2 class="connectedTitle">You asked X questions.</h2>
<!-- @todo foreach -> display questions asked by user + link to questions -->
<br>
<ul class="connectedTitle">
    <li><a href="">Question 1</a></li>
    <li><a href="">Question 2</a></li>
    <li><a href="">Question 3</a></li>
</ul>
<br>


<?php $_layout = ob_get_clean() ?>
<?php require_once __DIR__ . '/../templates/layout.php';?>
