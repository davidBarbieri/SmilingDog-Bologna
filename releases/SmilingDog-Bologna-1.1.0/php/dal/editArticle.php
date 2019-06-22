<?php
    $i = 1;
    foreach ($_FILES["foto"]["tmp_name"] as $key=>$tmp_name) {
        $temp = $_FILES["foto"]["tmp_name"][$key];

        if(!empty($temp)) {
            move_uploaded_file($temp, './img/articles/article-'.$_POST['id'].'_'.$i.'.jpg');
        }
        
        $i++;
    }

    $query = 'UPDATE articles SET 
        title="'.$_POST['title'].'",
        location="'.$_POST['location'].'",
        date="'.$_POST['date'].'",
        body="'.$_POST['body'].'",
        category="'.$_POST['category'].'"
    WHERE id='.$_POST['id'];

    include_once('./php/dal/db.php');
    
    $db->escape_string($query);
    $db->query($query);
    
    $db->close();

    header("location: /editor.php?category=".$_POST['category']);
?>
