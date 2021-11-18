<?php
error_reporting(0);

//rute halaman
$route = array(
    '/dashboard' => './dashboard.php',
    '/about' => './about.php',
    '/' => './dashboard.php'
);

//cek url
for($i=0;$i<=count($route);$i++){
    if(array_key_exists($path, $route[$path])){
        require_once($route[$path]);
    }else{
        require_once('./404.php');
    }
}