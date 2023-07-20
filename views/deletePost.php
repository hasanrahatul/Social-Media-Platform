<?php 
    
    require_once('header.php');
    $user = $_REQUEST['id'];
    var_dump($user);
?>

<html>
<head>
    <title>Delete User</title>
</head>
<body>

    <center>
        <a href='../controllers/deletePost.php?id=<?=$user?>&delete=del'>Confirm Delete</a> | <a href="../views/profile.php">Cancel</a>
    </center>
</body>
</html>