<?php
    include("connections.php");

    if (isset($_GET['id'])){
        
        $id = $_GET['id'];

        $sql = "DELETE FROM meeting WHERE id='$id' ";

        $result = $conn->query($sql);

        if($result){
            header("Location: homepage.php");
        }else{
            echo "Does not exist";
        }
    }else{
        echo "Something went wrong";
    }

    $conn->close();

?>