<?php
session_start();

// Destroy the session to log the user out
session_destroy();

// Redirect to the homepage after logout
header("Location: Index.php");
exit();
?>