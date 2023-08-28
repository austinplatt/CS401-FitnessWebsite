<?php

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

require_once 'Dao.php';

$dao = new Dao();

// Check if the user exists
$userExists = $dao->userExist($email, $password);

if ($userExists) {
    $_SESSION['authenticated'] = true;
    $_SESSION['email'] = $email;
    header("Location: index.php");
    exit;
} else {
    $_SESSION['authenticated'] = false;
    $_SESSION['error_message'] = "Invalid email or password.";
    $_SESSION['preserved_email'] = $email;
    header("Location: signin.php");
    exit;
}