<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a post</title>
</head>
<body>
    <form method="POST" action="../project/controllers/createPostController.php" enctype="multipart/form-data">  
        <h3>Create a post</h3>
        <input type="text" placeholder="Post title" name="title"/> </br/></br/>
        <textarea type="text" placeholder="Description" name="description"></textarea> <br /><br />
        <input type="text" placeholder="$Goal" name="goal" /> <br /><br />
        <input type="file" name="post_image" /> <br /><br />
        <input hidden type="text" name="username" value=" echo$_SESSION["username"] ?> 
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
