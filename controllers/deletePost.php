<?php 
    session_start();
    require('../models/postModel.php');

    $username = null;
    $password = null;
    $email = null;

    if(isset($_REQUEST['delete']))
    {
        $id = $_REQUEST['id'];
        $deletePost = deletePost($id);

        if($deletePost)
        {
            header('location: ../views/profile.php');
            die();
        }
        else
        {
            echo 'not deleted';
        }
        
    }
    else {
        echo 'Try again';
    }




?>