<?php

  require('../models/postModel.php');
  if(isset($_REQUEST['submit'])){

    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $post = $_REQUEST['post'];
    $filename = $_FILES['image']['name'];
    $src = $_FILES['image']['tmp_name'];
    $des = "../models/userupload/".$_FILES['image']['name'];

      if($name != null && $username != null && $post != null){
              move_uploaded_file($src, $des);
              $status = createPost($name, $username,$post,$filename);
              if($status){
                header('location: ../views/homepage.php?message=done');
              }else{
                header('location: ../views/homepage.php');
              }
          }

          else{
             $message = 'Invalid file type. Only jpg, jpeg and png files are allowed';
             echo "<script>alert('$message');</script>";
          }
      
    }
    else{
        $message = 'Please fill out all the fields';
        echo "<script>alert('$message');</script>"; 
   }

 ?>
