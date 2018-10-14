<?php
    if ($_POST['action'] != '') {
        include_once('./php/dal/'.$_POST['action'].'Article.php');
        die;
    }

    $category = isset($_GET['category']) && ($_GET['category'] == 'eventi' || $_GET['category'] == '') ? 'eventi' : 'foto';

    if ($_GET['action'] == 'delete') {
        include_once('./php/dal/deleteArticle.php');
        die;
    } else if ($_GET['action'] == 'edit') {
        include_once('./php/dal/getArticle.php');
    }

    $catSelected = array();
    if ($category == 'eventi') {
        $catSelected['eventi'] = 'selected';
    } else {
        $catSelected['foto'] = 'selected';
    }
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
                        <a href="?category=eventi">Eventi</a>
                    </li>
                    <li <?php echo $category == 'foto' ? $selectedClass : ''; ?>>
                        <a href="?category=foto">Foto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="wrapper">
        <menu>
            <a class="createArticle" href="editor.php?category=<?php echo $category;?>">
                Tornare indietro
            </a>
        </menu>

        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $article['id'];?>">
            <input type="hidden" name="action" value="<?php echo $_GET['action'];?>">

            <ul class="fields">
                <li class="field">
                    <label>Titolo</label>
                    <input type="text" name="title" value="<?php echo $article['title'];?>">
                </li>
                <li class="field">
                    <label>Posto</label>
                    <input type="text" name="location" value="<?php echo $article['location'];?>">
                </li>
                <li class="field">
                    <label>Data</label>
                    <input type="date" name="date" value="<?php echo $article['date'];?>">
                </li>
                <li class="field">
                    <label>Categoria</label>
                    <select name="category">
                        <option <?php echo $catSelected['eventi'];?> value="eventi">Eventi</option>
                        <option <?php echo $catSelected['foto'];?> value="foto">Foto</option>
                    </select>
                </li>
                <li class="field wide">
                    <label>Testo</label>
                    <textarea name="body"><?php echo $article['body'];?></textarea>
                </li>
                <li class="field">
                    <label>Foto #1 <span>(principale)</span></label>
                    <input type="file" name="foto[0]" accept="image/*">
                </li>
                <?php
                    for ($i=1; $i<=9; $i++) {
                        echo '<li class="field">
                        <label>Foto #'.($i+1).'</label>
                        <input type="file" name="foto['.$i.']" accept="image/*">
                    </li>';
                    }
                ?>
                <li class="field wide">
                    <input type="submit" value="Salvare <?php echo $category == 'eventi' ? 'evento' : 'galleria';?>">
                </li>
            </ul>
        </form>
    </div>
</body>
</html>