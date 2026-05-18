<?php
$uri = getSanitizedUri();
switch ($uri) {
    case '':
    case 'index.php':
        (new HomeController())->index();
        break;

    default:
        http_response_code(404);
        require LAYOUTS_PATH . '/error.php';
        break;
}
