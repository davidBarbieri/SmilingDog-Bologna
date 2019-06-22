<?php
    include_once('./php/dal/db.php');
    
    $query = 'DELETE FROM articles WHERE id='.$_GET['id'].';';
    
    $db->query($query);
    $db->close();

    header("location: /editor.php?category=".$_GET['category']);
?>
