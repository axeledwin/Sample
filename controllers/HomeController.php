<?php

class HomeController {
    public function index() {
        $title = "Home";
        $scripts = ['home.js'];

        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/home.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}