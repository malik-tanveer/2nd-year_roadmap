<?php
echo "<h2>PHP Constants Example</h2>";

// Constant define karna
define("SITE_NAME", "My Awesome Website");
define("MAX_USERS", 100);
define("IS_LIVE", true);

// Constant use karna
echo "Website Name: " . SITE_NAME . "<br>";
echo "Maximum Users Allowed: " . MAX_USERS . "<br>";
echo "Is Website Live? ";
var_dump(IS_LIVE);
echo "<br>";

// Constants ko change nahi kiya ja sakta
// SITE_NAME = "Another Website"; // Ye error dega
?>
