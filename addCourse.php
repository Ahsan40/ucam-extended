<?php
require_once './header.php';
$user_data = check_login($conn);

if(isset($_POST['book_seat']))
{
    //echo "Send Massage";
    book_ticket($conn, $_POST);
    header("Location: " . PAGES['shuttle']);
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
<div id="add-course-popup" class="<?php echo (isset($id) ? 'show': 'hide'); ?>">
    <div class="modal-content">
        <button onclick="toggleVisibility('add-course-popup')" class="close"> Close </button>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="edit_course_code" value="">
            <input type="text" name="edit_course_name" value="">
            <input type="text" name="edit_course_des" value="">
            <label for="files">Update your File</label>
            <input type="text" name="course_credit" placeholder="Credit" />
            <input type="time" id="appt" name="appt">
            <input type="hidden" name="fk_id" value="<">
            <input type="hidden" name="fk_address" value="">
            <input type="submit" value="Update Information" name="edit_btn">
        </form>
    </div>
</div>
<button type="submit" onclick="toggleVisibility('add-course-popup')" class="new-post-btn"> Add New Course </button>


<table>
    <thead>
    <tr>
        <th>SL</th>
        <th>Code</th>
        <th>Name</th>
        <th>Section</th>
        <th>Time</th>
    </tr>
    <thead>
    <tbody>
    <tr>
        <!--SL-->
    </tr>
    <tr>
        <!--Code-->
    </tr>
    <tr>
        <!--Name-->
    </tr>
    <tr>
        <!--Section-->
    </tr>
    <tr>
        <!--Time-->
    </tr>
    </tbody>
    <table/>

</body>
</html>
