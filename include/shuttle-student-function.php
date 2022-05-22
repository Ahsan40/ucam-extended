<?php
function book_ticket($conn, $POST)
{
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        //Here we are inserted in the database
        //we take inputs from user and push them in the table
        $u_id = $POST['u_id'];
        $b_id = $POST['b_id'];
        $s_id = $POST['s_id'];
        $seat = $POST['seat'];
        $round = $POST['round'];

        $duplicate = mysqli_num_rows($conn->query("SELECT * FROM ticket WHERE u_id = '$u_id' AND s_id = '$s_id' AND date(d) = CURRENT_DATE")) > 0;

        if (!$duplicate) {
            $query = "INSERT INTO ticket(u_id, b_id, s_id, round, seat) VALUES('$u_id','$b_id', '$s_id', $round, $seat)";
            $result = mysqli_query($conn, $query);
            if ($result)
                header("Location: " . PAGES['shuttle']);
            else
                echo "Unknown Error!";
        } else {
            echo "Booking More Than 1 Ticket is Not Allowed!";
        }
        die();
    }
}