<?php
class AuthCheck {
    public function handle($uri) {
        session_start();
        // Allow these URLs without login
        $publicRoutes = ['/', '/about', '/login'];
        if (in_array($uri, $publicRoutes)) return true;

        // Otherwise require login
        if (!isset($_SESSION['logged_in'])) {
            echo "<h3>Access Denied! Please <a href='/week5/Day_2/login'>login</a>.</h3>";
            return false;
        }
        return true;
    }
}
