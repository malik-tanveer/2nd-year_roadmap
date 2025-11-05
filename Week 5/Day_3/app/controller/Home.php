<?php
namespace App\Controller;

class Home
{
    public function index()
    {
        include '../app/Views/templates/header.php';
        include '../app/Views/home.php';
        include '../app/Views/templates/footer.php';
    }

    public function about()
    {
        include '../app/Views/templates/header.php';
        include '../app/Views/about.php';
        include '../app/Views/templates/footer.php';
    }
    
    public function students()
    {
        $data['students'] = ['Ali', 'Sara', 'Hamza', 'Zain', 'Fatima'];
        include '../app/Views/students.php';
        // include __DIR__ . '/../Views/students.php';
    }
}
