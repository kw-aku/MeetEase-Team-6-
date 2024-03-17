<?php
include ("connections.php");

global $conn;
if (isset($_POST['submit_button'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $hashpass = password_hash($password, PASSWORD_BCRYPT);
    
    $sql = "INSERT INTO user (fname, lname, email, password, role_id) VALUES ('$fname', '$lname', '$email', '$hashpass',2)";
    $result = $conn->query($sql); 
    
    if ($result) {
        echo "<script>alert('Registered Successfully');</script>";
        header("Location: loginpage.php");
    } else {
        echo "<script>alert('Registration Failed');</script>";
        echo "<script>window.location.href = 'register.html';</script>";
    }
} else {
    echo "Something went wrong";
}


