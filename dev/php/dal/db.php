<?php
    /* DB */
    define("DB_HOST", "localhost");
    define("DB_NAME", "smilingdog_bologna");
    define("DB_USER", "smilingdog_user");
    define("DB_PASS", "mojitoedora");

    /* RETRIEVING DATA */
    $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($db->connect_errno > 0){ 
        die('Unable to connect to database ['.$db->connect_error.']'); 
    }
?>