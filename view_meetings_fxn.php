<?php
include "connections.php";

// Write a SELECT Query on the "Family_name" table
$query = "SELECT * FROM meeting";

// Execute the query using the connection
$result = mysqli_query($conn, $query);



// Check if the connection worked
if (!$result) {
    die("Query failed");
}

// Fetch the results
$meetings = array();
if ($result -> num_rows >0){
    while ($row = $result->fetch_assoc()) {
        $meetings[$row['id']] = [
            'title' => $row['title'],
            'venue' => $row['venue'], 
            'stime' => $row['stime'], 
            'etime' => $row['etime'],  
        ];
    }
}



// Closing connection
$conn->close();

?>