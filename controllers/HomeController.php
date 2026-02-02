<?php

class HomeController
{
    public function index()
    {

        if (!empty($_SESSION['user'])) {
            header('Location: ' . BASE_URL . '/dashboard');
            exit();
        }
        $title = "Home";
        $scripts = ['home.js'];

        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/home.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
