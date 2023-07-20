<?php 

   require('../models/connection.php');

    function loginCheck($user_name, $password){

        $con = getconnection();
        $sql1 = "select * from users where user_name='{$user_name}' and password='{$password}'";
        $sql2 = "select * from admin where user_name='{$user_name}' and password='{$password}'";
        $result1 = mysqli_query($con, $sql1);
       // $result2 = mysqli_query($con, $sql2);

        while ($row1 = $result1->fetch_assoc()) {
            $_SESSION['user'] = $row1['user_name'];
            $_SESSION['id'] = $row1['id'];
            $_SESSION['email'] = $row1['email'];
            $_SESSION['status'] = $row1['status'];
            $_SESSION['type'] = $row1['type'];
        }
        /* while ($row2 = $result2->fetch_assoc()) {
            $_SESSION['user'] = $row2['user_name'];
            $_SESSION['id'] = $row2['id'];
            $_SESSION['email'] = $row2['email'];
            $_SESSION['type'] = $row2['type'];
        }*/
        if(mysqli_num_rows($result1)){
            return true;
        }
       /* else if(mysqli_num_rows($result2)){
            return true;
        }*/
        else{
            return false;
        }
    }

    function registration($name, $user_name, $email, $password, $confirmPassword, $phoneNumber){

        $con = getconnection();
        $query = "insert into users (name, user_name, email, password, confirmPassword, phone_number) values('{$name}', '{$user_name}', '{$email}', '{$password}','{$confirmPassword}','{$phoneNumber}')";
        $result = mysqli_query($con, $query);

        if ($result)
        {
             return true;
        }
        else
        {
            return false;
        }
    }



?>
 

    