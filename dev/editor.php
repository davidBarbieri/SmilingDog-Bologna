<?php
    $category = $_GET['category'] == 'eventi' || $_GET['category'] == '' ? 'eventi' : 'foto';
    define(CATEGORY, $category);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editor | Smiling Dog - Bologna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, initial-scale=1, user-scalable=no">
    <link rel="image_src" type="image/jpeg" href="http://www.smilingdogbologna.it/img/logo_smilingdog-bologna.jpg">
    
    <link rel="stylesheet" href="css/editor.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Lato:400|Quicksand:400,700">
</head>
<body id="editor">
    <header class="main-header">
        <div class="wrapper">
            <h1 class="isologo">
                <picture>
                    <img alt="Smiling Dog - Bologna" height="617" width="768" src="/img/smiling-dog_isologo.png">
                </picture>
            </h1>
        </div>
    
        <?php $selectedClass = "class='selected'"; ?>
        <nav class="menu">
            <div class="wrapper">
                <ul class="flatten">
                    <li <?php echo $category == 'eventi' ? $selectedClass : ''; ?>>
                        <a href="/editor.php?category=eventi">Eventi</a>
                    </li>
                    <li <?php echo $category == 'foto' ? $selectedClass : ''; ?>>
                        <a href="/editor.php?category=foto">Foto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="wrapper">
        <menu>
            <a class="createArticle" href="editor-articles.php?action=insert&category=<?php echo $category;?>">
                Nuovo articolo
            </a>
        </menu>

        <ul class="fakeTable articles-header">
            <li class="col title">Titolo</li>
            <li class="col date">Data</li>
            <li class="col location">Luogo</li>
            <li class="col options">Options</li>
        </ul>

        <ul class="articles-body">
            <?php
                $TPL = '<li class="row">
                <ul class="fakeTable">
                    <li class="col title">{{TITLE}}</li>
                    <li class="col date">{{DATE}}</li>
                    <li class="col location">{{LOCATION}}</li>
                    <li class="col options">
                        <a href="editor-articles.php?action=edit&id={{ID}}" class="edit-btn">
                            <i class="material-icons">edit</i>
                        </a>
                        <a href="editor-articles.php?category='.$category.'&action=delete&id={{ID}}" class="delete-btn">
                            <i class="material-icons">delete</i>
                        </a>
                    </li>
                </ul>
            </li>';

            include_once('php/dal/getArticles.php');

            while ($article = $articles->fetch_assoc()) {
                $row = $TPL;
                $row = str_replace('{{ID}}', $article['id'], $row);
                $row = str_replace('{{TITLE}}', $article['title'], $row);
                $row = str_replace('{{DATE}}', $article['date'], $row);
                $row = str_replace('{{LOCATION}}', $article['location'], $row);

                echo $row;
            }
            ?>
        </ul>
    </div>
</body>
</html>