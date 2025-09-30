<?php
session_start(); 

$_SESSION['message'] = "Hello! This is your session message.";

if(isset($_SESSION['message'])){
    echo $_SESSION['message'] . "<br>";
    unset($_SESSION['message']); }

?>
