<?php
//include connections
include "connections.php";
global $conn;
$title;
$description;
$date; 
$start_time; 
$end_time;
$venue;

//collecting user inputs
if ($_SERVER["REQUEST_METHOD"] == "POST") { //checking if the submit button has been clicked
    //collecting user inputs from from in "user_homepage.html"
    $title = mysqli_real_escape_string($conn, $_POST['meeting_title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']); 
    $venue = mysqli_real_escape_string($conn, $_POST['venue']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $start_time = mysqli_real_escape_string($conn, $_POST['start_time']);
    $end_time = mysqli_real_escape_string($conn, $_POST['end_time']);
      
    //sql query
    $sql = "INSERT INTO meeting (title, user_id, `desc`, date, stime, etime, venue) VALUES (?, 5, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $title, $description, $date, $start_time, $end_time, $venue);
    
    //checking if execution executes
    if ($stmt->execute()) { 
        echo "<script>alert('Meeting Added');</script>";
        header("Location: user_homepage.php");//redirecting to user_homepage.php
    } else {
        echo "<script>alert('Add Meeting Failed');</script>";
        echo "<script>window.location.href = 'register.php';</script>";
    }
} else {
    echo "Something went wrong";
}





