<?php
    include("connections.php");

    if (isset($_POST['submit'])) {
        $id = $_POST['id']; // Get the meeting ID from the hidden input
        $startTime = $_POST['start_time'];
        $endTime = $_POST['end_time'];

        $sql = "UPDATE meeting SET stime=?, etime=? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "sss", $startTime, $endTime, $id);

        if (mysqli_stmt_execute($stmt)){
            header("Location: homepage.php");
        }else{
            "Error updating: " . mysqli_error($conn);
        }
        
        mysqli_stmt_close($stmt);
        
      }

    $conn->close();

?>