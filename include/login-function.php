<?php
function check_login($conn)
{
    if (isset($_SESSION['user_name'])) {
        $user_name = $_SESSION['user_name'];
        $query = "SELECT * FROM users WHERE user_name = '$user_name'";

        $result = $conn->query($query);
        if ($result && mysqli_num_rows($result) > 0)
            return mysqli_fetch_assoc($result);
    }
    header("Location:" . PAGES['login']);
    die;
}

function login($conn, $POST) {
    $user_name = $POST['user_name'];
    $password = $POST['passwords'];
    if (!empty($user_name) && !empty($password)) {
        //here we read from database and verify the username and password
        $query = "SELECT * FROM users WHERE user_name = '$user_name' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $_SESSION = mysqli_fetch_assoc($result);
                if (strcmp($_SESSION['user_type'], "admin") == 0)
                    header("Location:" . PAGES['admin']);
                else
                    header("Location:" . PAGES['home']);
                die;
            }
        }
        echo "wrong username or password!";
    } else {
        echo "Email or password cannot be empty!";
    }
}