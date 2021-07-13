<?php 
session_start();
if (!isset($_SESSION['user'])) {
    
    header("location: index.php");
    die(); //can use exit() too
}