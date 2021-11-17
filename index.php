<?php
error_reporting(0);

//rute halaman
$route = array(
    ['./dashboard.php'=>'/dashboard'],
    ['./about.php'=>'/about']
);

//cek request url
$path = $_SERVER['REQUEST_URL'];
if ($path == '/dashboard'){
    require_once('./dashboard.php');
}elseif (strpos($path, '/about') > -1 ){
    require_once('./about.php');
}elseif ($path == null){
    require_once('./dashboard.php');
}