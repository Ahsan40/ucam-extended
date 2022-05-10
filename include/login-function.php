
<?php
function check_login($conn)
{
    if (isset($_SESSION['user_name'])) {
        $user_name = $_SESSION['user_name'];
        $query = "SELECT * FROM users WHERE user_name = '$user_name'";

        $result = $conn -> query($query);
        if ($result && mysqli_num_rows($result) > 0)
            return mysqli_fetch_assoc($result);
    }
    if (strcmp($_SESSION['user_type'], "admin") == 0)
    header("Location:" . PAGES['admin']);
    else
    header("Location:" . PAGES['login']);
    die;
}