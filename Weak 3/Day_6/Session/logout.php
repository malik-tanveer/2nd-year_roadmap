<?php
session_start();
session_unset(); // remove all session data
session_destroy(); // destroy session
header("Location: login.php"); // back to login page
exit();
?>
