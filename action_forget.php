<?php

session_start();
include('db.php');

$email = $_POST['email'];

try {
    $user = $auth->getUserByEmail("$email");
    if (!empty($user)) {
        $auth->sendPasswordResetLink($email);
        $_SESSION['status'] = 'Email sent! Please check email.';
        header('Location: forget.php');
        exit();
    }
} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    $_SESSION['status'] = "Incorrect Email";
    header('Location: forget.php');
    exit();
}
