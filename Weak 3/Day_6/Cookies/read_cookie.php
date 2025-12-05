<?php
if(isset($_COOKIE["user"])) {
    echo "👤 Cookie Value: " . $_COOKIE["user"] . "<br>";
    echo '<a href="delete_cookie.php">Delete Cookie</a>';
} else {
    echo "❌ Cookie not set or expired.<br>";
    echo '<a href="set_cookie.php">Set Cookie Again</a>';
}
?>
