<?php

define('APP_NAME', 'Maestros del Amor');
define('APP_ENV', 'production'); // 'local', 'development', 'production'
define('BASE_URL', 'https://dominio.com');
define('ROOT_PATH', dirname(__DIR__));           // raíz del proyecto
define('APP_PATH', ROOT_PATH . '/app');          // carpeta app
define('STORAGE_PATH', ROOT_PATH . '/storage');  // carpeta storage
define('PUBLIC_PATH', ROOT_PATH . '/public');    // carpeta pública

define('DB_HOST', 'mysql');
define('DB_NAME', 'mydb');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_CHARSET', 'utf8');

// Conexión PDO (si quieres usarla en toda la app)
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Error de conexión a BD: " . $e->getMessage());
}
