<?php
session_start();
include("db.php");

if (isset($_POST['signup_button'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'password' => $password,
        'displayName' => $name
    ];

    $createdUser = $auth->createUser($userProperties);

    if ($createdUser) {
        $_SESSION['status'] = $name;
        header("Location:welcome.php");
    } else {
        $_SESSION['status'] = "Failed to add user";
        header("Location:login.php");
    }
}
