<?php

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/public');

switch ($uri) {
    case '':
    case 'index.php':
        require VIEWS_PATH . '/home.php';
        break;

    default:
        http_response_code(404);
        require LAYOUTS_PATH . '/error.php';
        break;
}
