<?php
class Home {
    public function index() {
        echo "<h2>Welcome to Home Page!</h2>";
    }

    public function about() {
        echo "<h2>This is About Page.</h2>";
    }

    public function dashboard() {
        echo "<h2>Welcome to Dashboard (Protected Route)</h2>";
    }
}
