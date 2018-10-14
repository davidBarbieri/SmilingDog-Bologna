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
    $db->close();

    header("location: /editor.php?category=".$_GET['category']);
?>
