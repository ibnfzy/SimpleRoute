<?php
error_reporting(0);

$request = $_SERVER['REQUEST_URI']; 
switch ($request) {
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    case '':
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '/dashboard' :
        require __DIR__ . '/views/dashboard.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}