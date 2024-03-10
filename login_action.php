<?php
//include connection
include "connections.php";

$email= $_POST['email'];
$password= $_POST['password'];

$sql= "SELECT FROM user WHERE email= $email";
//query will be run here


