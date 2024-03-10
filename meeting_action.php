<?php
//include connections
include "connections.php";

if (isset($_POST['submit_meeting'])) { //checking if the submit button has been clicked
    //collecting user inputs from from in "user_homepage.html"
    $description = mysqli_real_escape_string($conn, $_POST['description']); 
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $start_time = mysqli_real_escape_string($conn, $_POST['start_time']);
    $end_time = mysqli_real_escape_string($conn, $_POST['end_time']);
       
    $sql = "INSERT INTO meeting (id, title, user_id, desc, date, stime, etime, venue) VALUES (#insert varialbles from the form here)"; //sql query
    $result = $conn-> query($sql); //executing sql query
    
    if ($result) { 
        echo "<script>alert('Meeting Added');</script>";
        header("Location: user_homepage.php");
    } else {
        echo "<script>alert('Add Meeting Failed');</script>";
        echo "<script>window.location.href = 'register.html';</script>";
    }
} else {
    echo "Something went wrong";
}



