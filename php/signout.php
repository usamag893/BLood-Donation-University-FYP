<?php
session_start();

// Check if the user is logged in
if(isset($_SESSION['email'])) {
    // If logged in, destroy the session to log the user out
    session_destroy();
    session_unset();
    
    // Redirect the user to the login page
    header("Location:../login.php");
    exit;
} else {
    // If the user is not logged in, you can handle it as needed (e.g., redirect to login page)
    header("Location:../login.php");
    exit;
}
?>
