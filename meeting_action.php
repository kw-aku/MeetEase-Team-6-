<?php
//include connections
include "connections.php";
include "login_action.php";
global $conn;
session_start();
$user_id = $_SESSION['user_id'];


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
    $sql = "INSERT INTO meeting (title, user_id, `desc`, date, stime, etime, venue) VALUES ( $title,$user_id, $description, $date, $start_time, $end_time, $venue);";
    $result = mysqli_query($conn, $emailQuery);
    
    //checking if execution executes
    if ($result) { 
        echo "<script>alert('Meeting Added');</script>";
        header("Location: user_homepage.php");//redirecting to user_homepage.php
    } else {
        echo "<script>alert('Add Meeting Failed');</script>";
        echo "<script>window.location.href = 'register.php';</script>";
    }
} else {
    echo "Something went wrong";
}





