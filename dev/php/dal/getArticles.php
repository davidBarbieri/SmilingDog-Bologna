<?php
    include_once('./php/dal/db.php');
    
    $query = 'SELECT *, DATE_FORMAT(date, "%d-%m-%Y") AS date FROM articles WHERE category = "'.CATEGORY.'" ORDER BY date DESC;';
    $articles = $db->query($query);
    
    $db->close();
?>
