<?php 
    session_start();
    require('../models/postModel.php');
    $post = getAllPosts();
?>
<script>
    function validate()
    {

    var name = console.log(document.itemform.name.value);

    if(document.itemform.name.value=="")
    {
        alert("name cannot be empty");
        document.itemform.name.focus;
        return false;
    }
    return false;
    }
</script>

<!DOCTYPE html>
<html>
<!-- center table creation -->
<table width = 100%;>
    <tr height = 100px style ="background-color:#50C878 ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="site_logo.png">
        </td>
        <td align = right >
            <table >
                <!-- center menubar -->
                <tr style ="font-size:20px;">
                    <td><a href="dashboard.php"> Dashboard  |</a></td>
                    <td><a href="homepage.php"> Home  |</a></td>
                    <td><a href="messenger.php"> Messages |</a></td>
                    
                    <td><a href="#"> Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>News Feed</h1><hr>
            <?php

            if ($post!= null) {
                foreach ($post as $post) {
            ?>
            <h3><?=$post[1]?></h3>
            <img style="width:200px;height:200px;" src="../models/userupload/<?=$post[3]?>">
            <p><?=$post[2]?></p>
            <hr>
            <?php
        }
    }
    ?>
                
            
            
        </td>
    </tr>
    <!-- footer section -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           copyright @2022
        </td>
    </tr>
</table>


</html>