<?php

session_start();

unset($_SESSION['verified_user_id']);
unset($_SESSION['idTokenString']);

$_SESSION['status'] = "logged out successfully";
header('Location: login.php');
exit();
