<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

if ($email === "a@gmail.com" && $password === "pwd123") {
    $_SESSION['user'] = ["username" => "zenitsu"];
    header("location: ../profile.php");
} else {
    header("location: ../index.php?incorrect=1");
}
