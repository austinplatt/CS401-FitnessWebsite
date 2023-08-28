<?php
    session_start();

    // Unset the authentication flag
    unset($_SESSION['authenticated']);

    // Redirect to the main page
    header("Location: index.php");
    exit;