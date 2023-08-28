<?php

    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['email'] = $_POST['email'];

    require_once 'Dao.php';

    $dao = new Dao();

    $result = $dao->createUser($email, $password);
        if ($result === true) {
            // User created successfully
            header("Location: signin.php");
            exit;
        } else {
            // There was an error
            $_SESSION['preserved_email'] = $email;
            $_SESSION['error_message'] = $result;
            header("Location: signup.php");
            exit;
    }