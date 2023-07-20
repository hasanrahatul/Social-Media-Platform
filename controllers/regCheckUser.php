<?php 
    


session_start();
    require('../models/userModel.php');

    $json = $_POST['data'];
    $obj = json_decode($json);

    $name = $obj->name;
    $username = $obj->username;
    $email = $obj->email;
    $password = $obj->password;
    $confirmPassword = $obj->confirmPassword;
    $phoneNumber = $obj->phoneNumber;

    $status = registration($name, $username, $email, $password, $confirmPassword,$phoneNumber);

    if($status)
    {
        echo "Registration Successfully";
    }
    else {
        echo "null";
    }

    ?>