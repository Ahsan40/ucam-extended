<?php
function register($conn, $POST)
{
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        //Here we are inserted in the database
        //we take inputs from user and push them in the table
        $user_name = $POST['user_name'];
        $password = $POST['passwords'];
        $c_password = $POST['confirm_passwords'];
        $duplicate = mysqli_num_rows($conn->query("SELECT user_name FROM users WHERE user_name ='$user_name'")) > 0;

        if(!empty($user_name) && !empty($password) && !empty($c_password) && !$duplicate && strcmp($password, $c_password) == 0) {
            $query = "INSERT INTO users(user_name, password) 
                VALUES('$user_name','$password')";
            $conn->query($query);
            header("Location: " . PAGES['login']);
            die();
        } else {
            echo "Signup Failed!";
        }
    }
}

