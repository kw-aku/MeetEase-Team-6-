<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $hashpass = password_hash($password, PASSWORD_BCRYPT);
    
    $sql = "INSERT INTO user (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$hashpass')";
    $result = $conn-> query($sql);
    
    if ($result) {
        echo "<script>alert('Registered Successfully');</script>";
        echo "<script>window.location.href = 'loginpage.php';</script>";
    } else {
        echo "<script>alert('Registration Failed');</script>";
        echo "<script>window.location.href = 'register.html';</script>";
    }
} else {
    echo "Something went wrong";
}
?>
