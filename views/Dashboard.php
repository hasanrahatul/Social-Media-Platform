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
                    <td><a href="homepage.php">Home  |</a></td>
                    <td><a href="messenger.php"> Messages |</a></td>
                    <td><a href="profile.php"> Timeline  |</a></td>
                    <td><a href="../controllers/logout.php"> Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =15% bgcolor="#50C878" valign="top" align="center">
           <img src="DP.jpg" width="180px" height="200px"><br>
           <h2>Md. Rahatul Hasan Rahat </h2><br>
           <p>Studies Bsc. in CSE at AIUB</p>
           <p>Lives in Dhaka, Bangladesh</p>
           <p>Followed by 1,214 people</p>
           <a href="#">Edit Profile</a>
       </td>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Welcome to Social Site</h1><hr>
            <table  align="center" width="500px" >
                <tr>
                    <td height="100px" width="100px" bgcolor="#B2BEB5" align="center"><a href="homepage.php">Homepage</a></td>
                    <td height="100px" width="100px" bgcolor="#B2BEB5" align="center"><a href="messenger.php">Messenger</a></td>
                </tr>
                <tr>
                    <td height="100px" width="100px" bgcolor="#B2BEB5" align="center"><a href="newsFeed.php">News feed</a></td>
                    <td height="100px" width="100px" bgcolor="#B2BEB5" align="center"><a href="friends.php">Friends</a></td>
                </tr>
                
                  <tr>
                    <td height="100px" width="100px" bgcolor="#B2BEB5" align="center"><a href="privacy.php">Edit profile</a></td>
                    <td height="100px" width="100px" bgcolor="#B2BEB5" align="center"><a href="profile.php">Profile Post</a></td>
                </tr>
            </table>
            


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