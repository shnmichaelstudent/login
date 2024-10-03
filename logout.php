<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();

    echo "User logged out successfully.";
}
?>
