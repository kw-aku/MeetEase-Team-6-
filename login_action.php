<?php
// Start the session
session_start();
include "connections.php";
global $conn;
$admin_role_id= 1;

if (isset($_POST['submit'])) {
    //Collecting form data and storing in variables
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

//query to select record from people table using email
    $emailQuery = "SELECT * FROM user WHERE email = '$email'";
// Execute the query
    $emailResult = mysqli_query($conn, $emailQuery);
    
//Checking if any rows were returned
    if (mysqli_num_rows($emailResult) > 0) {
        // At least one row was returned
       //Fetching record
        $fetchedRecord= mysqli_fetch_assoc($emailResult);
        //Fetching password from record
        $hashedPasswordFromDb = $fetchedRecord['password'];
        $user_id= $fetchedRecord['id'];

     
        if ($fetchedRecord['role_id']== $admin_role_id && $password == $hashedPasswordFromDb){
            echo "Password verified. Login successful.";

            $_SESSION['user_id'] = $user_id;
            

            header("Location: adminpage.php");
            exit();
            
        }
        else{
            echo "No records found.";
        }
        
        //Checking if password is the same
        if (password_verify($password, $hashedPasswordFromDb)) {
            
            echo "Password verified. Login successful.";

            $_SESSION['user_id'] = $user_id;
            

            header("Location: homepage.php");
            exit();
        } else {
            // Passwords don't match
            header("Location: loginpage.php");
           
            
        
        }
    } else {
        // No rows were returned
        echo "No records found.";


    }
}
