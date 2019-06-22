<?php
    include_once('./php/dal/db.php');
    
    $query = 'INSERT INTO articles 
        (title, 
         date,
         location,
         body,
         category) 
    VALUES 
        ("'.$_POST['title'].'",
         "'.$_POST['date'].'",
         "'.$_POST['location'].'",
         "'.$_POST['body'].'",
         "'.$_POST['category'].'"
    );';

    $db->query($query);
    $db->escape_string($query);
    $id = $db->insert_id;
    $db->close();

    $i = 1;
    foreach ($_FILES["foto"]["tmp_name"] as $key=>$tmp_name) {
        $temp = $_FILES["foto"]["tmp_name"][$key];

        if(!empty($temp)) {
            move_uploaded_file($temp, './img/articles/article-'.$id.'_'.$i.'.jpg');
        }
        
        $i++;
    }

    header("location: /editor.php?category=".$_GET['category']);
?>
