<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    require_once "../Classes/Dbh.php";
    require_once "../Classes/Signup.php";

    $signup = new Signup($username, $pwd, $email);
    $signup->signupUser();

}