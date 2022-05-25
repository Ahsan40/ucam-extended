
<?php
$all_course =  fetchAllCourse($conn);
?>

<table>
    <thead>
    <tr>
        <th>SL</th>
        <th>Code</th>
        <th>Name</th>
        <th>Credit</th>
        <th>Section</th>
        <th>Time</th>
    </tr>
    <thead>
    <tbody>

    <?php $count = 1;?>
    <?php while ($course = mysqli_fetch_assoc($all_course)){ ?>
        <?php
        $c  = getCourse($conn, $course['course_id']);
        $s  = getSection($conn, $course['section_id']);
        $t  = getTime($conn, $course['time_id']);
        ?>
        <tr>
            <td>
                <!--SL-->
                <?php echo $count;?>
            </td>
            <td>
                <!--Code-->
                <?php echo $c['code'];?>
            </td>
            <td>
                <!--Name-->
                <?php echo $c['name'];?>
            </td>
            <td>
                <!--Credit-->
                <?php echo $c['credit'];?>
            </td>
            <td>
                <!--Section-->
                <?php echo $s['name'];?>
            </td>
            <td>
                <!--Time-->
                <?php echo $t['time'];?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
    <table/>
