<?php
    // $uploads_dir = './img/'.$_POST['category'];
    
    // for ($i=1; $i<=10; $i++) {
    //     if (isset($_FILES['foto'])) {

    //         $info = pathinfo($_FILES['foto']['name']);
    //         print_r($info);
    //         $ext = $info['extension']; // get the extension of the file
    //         $newname = "newname.".$ext; 


    //         move_uploaded_file($_FILES['foto_'.$i]['tmp_name'], './img/'.$_POST['category'].'/'.$_POST['id'].'_'.$i);
    //     }

        
    //     $target = 'images/'.$newname;
    //     move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
    // }

    // die;
    
    $query = 'UPDATE articles SET 
        title="'.$_POST['title'].'",
        location="'.$_POST['location'].'",
        date="'.$_POST['date'].'",
        body="'.$_POST['body'].'",
        category="'.$_POST['category'].'"
    WHERE id='.$_POST['id'];

    include_once('./php/dal/db.php');
    //echo $query;die;
    $db->escape_string($query);
    $db->query($query);
    
    $db->close();

    header("location: /editor.php?category=".$_POST['category']);
?>
