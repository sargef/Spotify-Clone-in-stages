<?php
include("../../config.php");

if (isset($_POST['name']) && isset($_POST['username'])) {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $date = date("Y-m-d");

    $query = mysqli_query($con, "INSERT INTO playlists VALUES(NULL, '$name', '$username', '$date')");
    // echo "Error: " . mysqli_error($con);
}
else {
    echo "Name or username not passed into file";
}

?>