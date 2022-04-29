
<?php
function check_login($conn)
{
    if (isset($_SESSION['email'])) {
        $id = $_SESSION['email'];
        $query = "SELECT * FROM users WHERE email = '$id'";

        $result = $conn -> query($query);
        if ($result && mysqli_num_rows($result) > 0)
            return mysqli_fetch_assoc($result);
    }

    header("Location:" . PAGES['login']);
    die;
}