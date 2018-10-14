<?php
    include_once('./php/dal/db.php');
    
    $query = 'SELECT * FROM articles WHERE id='.$_GET['id'].';';
    $result = $db->query($query);
    $article = mysqli_fetch_assoc($result);
    
    $db->close();
?>
