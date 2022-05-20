<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php
    require_once './header.php';
    $user_data = check_login($conn);
    if ($user_data['user_type'] == "user")
        header("Location:" . PAGES['home']);
    else
        header("Location:" . PAGES['admin']);
?>

<link rel="stylesheet" href="<?php echo CSS['styles.css']."?".time(); ?>">
<script type="text/javascript" src="<?php echo JS['toggle-visibility.js']; ?>"></script>
<title>Home Page</title>
</head>
    <body>
    <h1> User Home </h1>
    <center> <a href="<?php echo PAGES['logout']; ?>">Logout</a> </center>
<!--    --><?php //require_once INCLUDES['nav-main-template']; ?>
<!--    --><?php //require_once INCLUDES['nav-logged-template']; ?>

    </body>
</html>