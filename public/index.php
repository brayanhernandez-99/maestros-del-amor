<?php

// Habilitar errores en desarrollo (puedes quitar esto en producción)
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/routes.php';