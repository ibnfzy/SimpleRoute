<?php
error_reporting(0);

$request = $_SERVER['REQUEST_URI']; //hapus /SimpleROute jika dijalankan pada domain seperti www.example.com 

switch ($request) {
    case '/SimpleRoute/about' :
        require __DIR__ . '/views/about.php';
        break;
    case '/SimpleRoute':
    case '/SimpleRoute/' :
        require __DIR__ . '/views/index.php';
        break;
    case '/SimpleRoute/dashboard' :
        require __DIR__ . '/views/dashboard.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}