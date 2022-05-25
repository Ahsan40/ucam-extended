<?php
function addCourse ($conn, $POST) {
    $id = $POST['b_id'];
    $section = $POST['s_id'];
    $time = $POST['s_id'];

        $query = "INSERT INTO course(course_id, section_id, time_id ) VALUES ($id, $section, $time)";
        $result = mysqli_query($conn, $query);
        if ($result)
            header("Location: " . PAGES['add-course']);
        else
            echo "Unknown Error!";
    die();
}

function deleteCourse ($conn, $course_id) {
    $query = "DELETE FROM course WHERE id = $course_id;";
    $result = mysqli_query($conn, $query);
    if ($result)
        header("Location: " . PAGES['add-course']);
    else
        echo "Unknown Error!";
    die();
}

function getCourse($conn, $course_id) {
    $query = "SELECT * FROM courses WHERE c_id = $course_id";
    $result = mysqli_query($conn, $query);
    if ($result)
        return mysqli_fetch_assoc($result);
    else
        echo "Unknown Error!";
    die();
}

function getSection($conn, $section_id) {
    $query = "SELECT * FROM section WHERE c_id = $section_id";
    $result = mysqli_query($conn, $query);
    if ($result)
        return mysqli_fetch_assoc($result);
    else
        echo "Unknown Error!";
    die();
}

function getTime($conn, $time_id) {
    $query = "SELECT * FROM section WHERE c_id = $time_id";
    $result = mysqli_query($conn, $query);
    if ($result)
        return mysqli_fetch_assoc($result);
    else
        echo "Unknown Error!";
    die();
}