<!doctype html>
<html lang="it">
    <head>
        <?php include_once('php/templates/head.php'); ?>
    </head>
    <body>
        <?php
            include_once('php/templates/header.php');
            include_once('php/templates/contents/'.$_GET['page'].'.php');
            include_once('php/templates/footer.php');
            include_once('php/templates/external-sources.php');
        ?>
    </body>
</html>
