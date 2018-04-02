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
        <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/footer.css">
        <link rel="stylesheet" type="text/css" href="/Talk-About-Stuff/public/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
        <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_style.min.css' rel='stylesheet' type='text/css' />

        <?= isset($_css) ? $_css : "" ?>

        <title><?= isset($_title) ? $_title : "Talk About Stuff" ?></title>
    </head>
    <body>

        <?= $_content ?>

        <script src="/Talk-About-Stuff/public/js/jquery-3.2.1.min.js"></script>
        <script src="/Talk-About-Stuff/public/js/bootstrap.bundle.min.js"></script>
        <script src="/Talk-About-Stuff/public/js/bootstrap.min.js"></script>
        <script src="/Talk-About-Stuff/public/js/mdb.min.js"></script>
        <script src="/Talk-About-Stuff/public/js/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/js/froala_editor.min.js'></script>
        <script> $(function() { $('textarea').froalaEditor() }); </script>
    </body>
</html>
