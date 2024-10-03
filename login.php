<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['username'])) {
        echo "The user is already logged in. Wait for the user to log out first.";
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        echo "User logged in: " . $_SESSION['username'] . " Password: " . $_SESSION['password'];
    }
}
?>
