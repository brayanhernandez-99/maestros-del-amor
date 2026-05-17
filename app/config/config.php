<?php

define('APP_NAME', 'Maestros del Amor');
define('BASE_URL', 'https://maestrosdelamor.local');

define('ROOT_PATH', dirname(__DIR__, 2));           // raíz
define('APP_PATH', ROOT_PATH . '/app');             // carpeta app
define('PUBLIC_PATH', ROOT_PATH . '/public');       // carpeta public
define('STORAGE_PATH', ROOT_PATH . '/storage');     // carpeta storage
define('VIEWS_PATH', APP_PATH . '/views');          // carpeta de views
define('LAYOUTS_PATH', VIEWS_PATH . '/layouts');    // carpeta de layouts

define('DB_HOST', 'mysql');
define('DB_NAME', 'mydb');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_CHARSET', 'utf8');

define('WHATSAPP_PHONE', '+50497308133');
function getWhatsappUrl($serviceName) {
    $message = "Hola maestro 👋, estoy interesado en el servicio de \"" . $serviceName . "\". ¿Podría darme más información?";
    return 'https://wa.me/' . WHATSAPP_PHONE . '?text=' . urlencode($message);
}

// Conexión PDO (si quieres usarla en toda la app)
// try {
//     $pdo = new PDO(
//         "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
//         DB_USER,
//         DB_PASS,
//         [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
//     );
// } catch (PDOException $e) {
//     die("Error de conexión a BD: " . $e->getMessage());
// }
