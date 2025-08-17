<?php

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

switch ($uri) {
    case '':
        require __DIR__ . '/../app/views/home.php';
        break;
        
    case 'index.php':
        require __DIR__ . '/../app/views/home.php';
        break;

    case 'about':
        require __DIR__ . '/../app/views/about.php';
        break;
        
    default:
        require __DIR__ . '/../app/views/404.php';
        break;
}