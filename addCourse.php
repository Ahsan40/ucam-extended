<?php
    require_once './header.php';
    $user_data = check_login($conn);
    require_once INCLUDES['course-function'];

    if(isset($_POST['add_full_section_btn']))
    {
        addCourse($conn, $_POST);
        header("Location: " . PAGES['add-course']);
    }
?>


<html>
<head>
    <link rel="stylesheet" href="<?php echo CSS['modal.css']."?".time(); ?>">
    <script type="text/javascript" src="<?php echo JS['toggle-visibility.js']; ?>"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--Form-->
<?php require_once INCLUDES['add-full-section-template']; ?>
<?php require_once INCLUDES['add-time-template']; ?>
<?php require_once INCLUDES['add-section-template']; ?>
<?php require_once INCLUDES['add-course-template']; ?>

<!--Results-->
<?php require_once INCLUDES['view-all-course-template']; ?>

</body>
</html>
