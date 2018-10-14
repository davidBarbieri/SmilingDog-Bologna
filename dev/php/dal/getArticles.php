<?php
    include_once('./php/dal/db.php');
    
    $query = 'SELECT *, DATE_FORMAT(date, "%d-%m-%Y") AS date, UNIX_TIMESTAMP(date)  AS dateForSort FROM articles WHERE category = "'.CATEGORY.'" ORDER BY dateForSort DESC;';
    $articles = $db->query($query);
    
    $db->close();
?>
