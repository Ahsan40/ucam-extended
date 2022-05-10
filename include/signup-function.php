<?php
function register($conn, $POST)
{
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        //Here we are inserted in the database
        //we take inputs from user and push them in the table
        $student_id = $POST['student_id'];
        $password = $POST['passwords'];
        $c_password = $POST['confirm_passwords'];
        $duplicate = mysqli_num_rows($conn->query("SELECT student_id FROM users WHERE student_id ='$student_id'")) > 0;

        if(!empty($student_id) && !empty($password) && !empty($c_password) && !$duplicate && strcmp($password, $c_password) == 0) {
            $query = "INSERT INTO users(student_id, password) 
                VALUES('$student_id','$password')";
            $conn->query($query);
            header("Location: " . PAGES['login']);
            die();
        } else {
            echo "Signup Failed!";
        }
    }
}

