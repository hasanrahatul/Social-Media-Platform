<?php 

    session_start();
    require('../models/userModel.php');

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password))
        {
            $status = loginCheck($username, $password);

            if($status != null)
            {

                $_SESSION['status'] = true;
                // $_SESSION['current_user'] = userInfo($username);
                var_dump($_SESSION['current_user']);
                $_SESSION['user'] = $username;
                setcookie('status', 'true', time()+3600, '/');
                
                // userInfo($username);
                header('location: ../views/dashboard.php'); 

            }
            else{

                $msg = 'Login failed';
                echo "<script>alert('$msg');</script>";
            }


        }
        else {
            echo "Enter Valid Information";
        }
    }
?>