<?php

class DashboardController
{
    public function index()
    {

        if (empty($_SESSION['user'])) {
            header('Location: ' . BASE_URL . '/home');
            exit();
        }

        $title = "Dashboard";
        $scripts = ['dashboard.js'];

        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/dashboard.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
