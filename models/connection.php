<?php 



function getconnection(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "project";

    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    return $con;
}
?>

