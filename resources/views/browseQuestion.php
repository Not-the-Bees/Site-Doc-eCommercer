<?php $_title = "Talk About Stuff - Browse questions" ?>

<?php ob_start() ?>

    <header class="banner">
        <h1>Browse questions</h1>
    </header>

    <section class="container">
        <section class="row">
            <ul>
                <?php
                foreach ($questions as $question) {
                    ?>
                    <br>
                    <li>
                        <a class="displayQuestion" href="/Talk-About-Stuff/controllers/readQuestion.php?id=<?= $question['id']; ?>">
                            <?php echo strtoupper($question['title']); ?>
                        </a> by <?= ucfirst(Member::find($question['user_id'])['login']); ?>, <?= getTimeAgo($question['created_at']); ?>.
                    </li>
                    <?php
                }
                ?>
            </ul>
        </section>
    </section>

<?php $_layout = ob_get_clean() ?>
<?php require_once __DIR__ . '/../templates/layout.php';?>