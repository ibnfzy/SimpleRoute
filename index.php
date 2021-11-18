<?php
error_reporting(0);

//rute halaman
$path = $_SERVER['PATH_INFO'];
$route = array(
    '/dashboard' => './dashboard.php',
    '/about' => './about.php',
    '/' => './dashboard.php'
);

//cek url
if(array_key_exists($path, $route)){
        require_once($route[$path]);
    }else{
        require_once('./404.php');
    }