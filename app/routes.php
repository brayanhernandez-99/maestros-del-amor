<?php

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

switch ($uri) {
    case '':
    case 'index.php':
        require VIEWS_PATH . '/home.php';
        break;

    case 'conditions':
    case 'conditions.php':
        require VIEWS_PATH . '/conditions.php';
        break;

    default:
        http_response_code(404);
        require LAYOUTS_PATH . '/error.php';
        break;
}