<?php

    require('connection.php');

    function createPost($name, $username,$post,$filename){
        $con = getConnection();
        $sql = "insert into post_user (name,username,post,image) values('$name', '$username','$post','$filename')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getAllPosts(){
        $con = getConnection();
        $sql = "select *from  post_user";
        $result =  mysqli_query($con, $sql);
        if ($result->num_rows > 0){
        $row = mysqli_fetch_all($result);
        return $row;
    }
    }

function getownpost($username){
        $con = getConnection();
        $sql = "select *from  post_user where username = '$username'";
        $result =  mysqli_query($con, $sql);
        if ($result->num_rows > 0){
        $row = mysqli_fetch_all($result);
        return $row;
    }
    }
    function deletePost($id)
    {
        $con = getconnection();
        $sql = "delete from post_user where id ='$id'";
        $result = mysqli_query($con, $sql);
        if ($result)
        {
            return $result;
        }
        else {
            return false;
        }
    }
    
    

?>
