<?php
// Cookie delete karna (expiry time past me set)
setcookie("user", "", time() - 3600, "/"); 
echo "🗑️ Cookie deleted successfully.<br>";
echo '<a href="set_cookie.php">Set Cookie Again</a>';
?>
