<?php
function createPost($conn, $POST)
{
    $title = $POST['title'];
    $description = $POST['description'];
    $userId = $POST['userId'];
    $privacy = $POST['privacy'];
    if (!empty($title) && !empty($description) && !empty($userId) && !empty($privacy)) {
        $query = "INSERT INTO posts( title, description, userId, privacy) VALUES ('$title','$description','$userId','$privacy')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header("Location:" . PAGES['posts']);
        }
        else {
            echo "Cannot create post";
        }

    }
    else {
        echo "Required data not found";
    }
}
function getPosts($conn, $POST)
{

        $query = "SELECT * FROM posts INNER JOIN users ON posts.userId = users.u_id";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($result)) {
            $array[] = array(
                "id" => $row["id"],
                "title" => $row["title"],
                "description" => $row["description"],
                "userId" => $row["userId"],
                "privacy" => $row["privacy"],
                "createDate" => $row["createDate"],
                "user_name" => $row["user_name"],
                "email" => $row["email"],
                "user_type" => $row["user_type"],
                "profile_pic_url" => $row["profile_pic_url"],
            );

        }
        if ($array) {
            print_r(json_encode($array, true));
        }
        else {
            print_r(json_encode(array(), true));
        }

}
function getPostsForAll($conn, $POST)
{

    $query = "SELECT * FROM posts WHERE privacy = 1";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result)) {
        $user = $row["userId"];
        $query2 = "SELECT * FROM users WHERE u_id = '$user'";
        $result2 = mysqli_query($conn, $query);
        $object=mysqli_fetch_object($result2);
        $array[] = array(
            "id" => $row["id"],
            "title" => $row["title"],
            "description" => $row["description"],
            "userId" => $row["userId"],
            "privacy" => $row["privacy"],
            "createDate" => $row["createDate"],
            "user_name" => $object["user_name"],
            "email" => $object["email"],
            "user_type" => $object["user_type"],
            "profile_pic_url" => $object["profile_pic_url"],
        );

    }
    if ($array) {
        print_r(json_encode($array, true));
    }
    else {
        print_r(json_encode(array(), true));
    }
}

function deletePost($conn, $POST)
{
    $id = $POST['id'];
    if (!empty($id)) {
        $query = "DELETE FROM posts WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header("Location:" . PAGES['posts']);
        }
        else {
            echo "Cannot delete post";
        }

    }
    else {
        echo "Pass id of the post you want to delete";
    }
}
function updatePost($conn, $POST)
{
    $title = $POST['title'];
    $description = $POST['description'];
    $userId = $POST['userId'];
    $privacy = $POST['privacy'];
    $id = $POST['id'];


        $query = "UPDATE posts SET title='$title',description='$description',userId='$userId',privacy='$privacy' WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header("Location:" . PAGES['posts']);
        }
        else {
            echo "Cannot delete post";
        }

}