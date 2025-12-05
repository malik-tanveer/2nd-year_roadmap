<?php
// Cookie set karna (name: user, value: Kazmi, time: 30 sec)
setcookie("user", "Kazmi", time() + 30, "/");

echo "✅ Cookie 'user' set ho gayi hai (expire after 30 seconds).<br>";
echo '<a href="read_cookie.php">Read Cookie</a>';
?>
