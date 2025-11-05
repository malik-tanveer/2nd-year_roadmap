<?php
class Auth {
    public function login() {
        echo "<h2>Login Page</h2>";
        echo "<p>Login successful! Redirecting to dashboard...</p>";
        $_SESSION['logged_in'] = true;
    }

    public function logout() {
        session_destroy();
        echo "<h2>Logged Out Successfully</h2>";
    }
}
