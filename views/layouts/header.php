<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/home.css">
    
    <?php
        // Load page-specific CSS if it exists
        $currentPage = basename($_SERVER['REQUEST_URI'], '.php');
        $currentPage = preg_replace('/\?.*/', '', $currentPage); // Remove query string
        $cssFile = __DIR__ . "/../../public/css/{$currentPage}.css";
        
        if (file_exists($cssFile)) {
            echo '<link rel="stylesheet" href="' . BASE_URL . '/public/css/' . $currentPage . '.css">';
        }
    ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <nav>
        <img src="https://myapps.mmacompetent.com/files/logo2.png" alt="MMA Logo" class="hd-logo">
        <a href="home" class="logo">MMA Competent Manpower & General Services</a>

        <div class="links">
            <a href="contacts" id="contacts" class="nav">Contact</a>
            <a href="about" id="about" class="nav">About Us</a>
            <a href="jobs" id="jobs" class="nav">Jobs</a>
            <a href="home" id="login" class="nav">Login</a>
        </div>
    </nav>