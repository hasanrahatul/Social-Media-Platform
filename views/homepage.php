<?php 
    session_start();
    if (isset($_GET['message'])) {
        if($_GET['message'] == 'done')
        {
            echo "<script>alert('Your status have been posted');</script>";
    }
}
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
    else{
        alert("Your status have been posted");
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
                    <td><a href="newsFeed.php"> News Feed  |</a></td>
                    <td><a href="messenger.php"> Messages |</a></td>
                    
                    <td><a href="../controllers/logout.php"> Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =15% bgcolor="#50C878" valign="top" align="center"> <br>
           
           <h3>Friends </h3><br>
            <h3>Memories </h3><br>
            <h3>Groups </h3><br>
            <h3>Pages </h3><br>
           
       </td>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Homepage</h1><hr> <br>
            <h2 align = center>Create a Post</h2>
            <form method="POST" enctype="multipart/form-data" action="../controllers/createPostController.php">
                <table align="center">
                    <tr>
                        <td>Name:</td>
                        <td><input type="name" name="name" value=""></td>

                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input type="username" name="username" value=""></td>

                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td><input type="text" name="post" value=""></td>

                    </tr>
                    <tr>
                        <td>Photo upload:</td>
                        <td><input type="file" name="image" value=""></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Post"></td>

                    </tr>
                </table>
            </form>


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