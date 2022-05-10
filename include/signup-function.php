<?php
function register($conn, $POST)
{
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        //Here we are inserted in the database
        //we take inputs from user and push them in the table
        $user_name = $POST['user_name2'];
        $password = $POST['passwords2'];
        $c_password = $POST['confirm_passwords'];
        $duplicate = mysqli_num_rows($conn->query("SELECT user_name FROM users WHERE user_name ='$user_name'")) > 0;

        if (!empty($user_name) && !empty($password) && !empty($c_password) && !$duplicate) {
            $query = "INSERT INTO users(user_name, password) VALUES('$user_name','$password')";
            $result = mysqli_query($conn, $query);
            if ($result)
                header("Location: " . PAGES['login']);
            else
                echo "Signup Failed!";
            die();
        } else {
            echo "Signup Failed!";
        }
    }
}

