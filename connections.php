<?php
$SERVER = "localhost";
$USERNAME ="root";
$PASSWORD ="";
$DATABASE = "meeteasy";

//creating a connection
$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);

if(!$conn){
    die("Connection failed". mysqli_connect_error());
}

?>
