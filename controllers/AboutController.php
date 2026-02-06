<?php

class AboutController
{
    public function index()
    {
        $title = "About Us";
        $scripts = ['about.js'];

        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/about.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
