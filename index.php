<?php
require_once __DIR__ . '/includes/config.php';

$url = $_GET['url'] ?? 'home';
$url = explode('/', trim($url, '/'));

$controller = ucfirst($url[0]) . 'Controller';
$action = $url[1] ?? 'index';

require_once __DIR__ . "/controllers/$controller.php";

$ctrl = new $controller();
$ctrl->$action();

