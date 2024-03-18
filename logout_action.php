<?php
include "connections.php";
session_start();

if ($_POST['logout_button']){
   unset($_SESSION['user_id']);
   header("Location: loginpage.php");
}