<!doctype html>
<html lang="it">
    <head>
        <?php include_once('php/templates/head.php'); ?>
    </head>
    <body <?php echo 'class="'.$_GET['page'].'"'; ?>>
        <?php 
            if ($_GET['dynamic'] == true) {?>
                <div id="carouselBg"></div>
                <div id="carouselContainer">
                    <button data-close-carousel type="button">chiudi [x]</button>
                    <div data-carousel></div>
                </div>
        <?php
        }
            include_once('php/templates/header.php');
            include_once('php/templates/intros/'.$_GET['page'].'.php');
        ?>
        <div class="wrapper">
            <?php 
                if ($_GET['dynamic'] == true) {
                    define(CATEGORY, $_GET['page']);
                    include_once('php/dal/getArticles.php');
                    include_once('php/templates/contents/articles.php');
                    $articles->free();
                } else {
                    include_once('php/templates/contents/'.$_GET['page'].'.php');
                }
            ?>
        </div>
        <?php
            include_once('php/templates/footer.php');
            include_once('php/templates/external-sources.php');
        ?>
    </body>
</html>
