<?php
    /* DB */
    define("DB_HOST", "89.46.111.75");
    define("DB_USER", "Sql1267673");
    define("DB_PASS", "21z31154nm");
    define("DB_NAME", "Sql1267673_1");

    /* RETRIEVING DATA */
    $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($db->connect_errno > 0){ 
        die('Unable to connect to database ['.$db->connect_error.']'); 
    }
?>