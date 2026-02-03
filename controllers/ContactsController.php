<?php

class ContactsController
{
    public function index()
    {
        $title = "Contact Us";
        $scripts = ['contacts.js'];

        require_once __DIR__ . '/../views/layouts/header.php';
        require_once __DIR__ . '/../views/contacts.php';
        require_once __DIR__ . '/../views/layouts/footer.php';
    }
}
