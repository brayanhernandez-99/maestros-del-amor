<?php
define('APP_NAME', 'Maestros del Amor');
define('BASE_URL', getenv('APP_URL'));
define('ROOT_PATH', dirname(__DIR__, 2));           // raíz
define('APP_PATH', ROOT_PATH . '/app');             // carpeta app
define('PUBLIC_PATH', ROOT_PATH . '/public');       // carpeta public
define('STORAGE_PATH', ROOT_PATH . '/storage');     // carpeta storage
define('VIEWS_PATH', APP_PATH . '/views');          // carpeta de views
define('LAYOUTS_PATH', VIEWS_PATH . '/layouts');    // carpeta de layouts

// ============================================================
// BASE DE DATOS - Descomentar si se necesita MySQL en el futuro
// ============================================================
// define('DB_HOST', getenv('DB_HOST'));
// define('DB_NAME', getenv('DB_NAME'));
// define('DB_USER', getenv('DB_USER'));
// define('DB_PASS', getenv('DB_PASS'));
// define('DB_CHARSET', 'utf8');

define('WHATSAPP_PHONE', getenv('WHATSAPP_PHONE'));

function getWhatsappUrl($serviceName) {
    $message = "Hola maestro, estoy interesado en el servicio de \"" . $serviceName . "\". ¿Podría darme más información?";
    return 'https://wa.me/' . WHATSAPP_PHONE . '?text=' . urlencode($message);
}

define('SERVICES', [
    [
        'name' => 'Amarres de amor',
        'img' => 'amarres-amor.jpeg',
        'desc' => 'Recupera la conexión perdida y fortalece los lazos afectivos con rituales energéticos de amor.',
    ],
    [
        'name' => 'Amarres del mismo sexo',
        'img' => 'amarres-mismo-sexo.jpeg',
        'desc' => 'Rituales personalizados para uniones y reconciliaciones entre parejas del mismo género.',
    ],
    [
        'name' => 'Rituales de atracción',
        'img' => 'rituales-atraccion.jpeg',
        'desc' => 'Aumenta tu magnetismo personal y atrae nuevas oportunidades amorosas y sociales.',
    ],
    [
        'name' => 'Endulzamientos',
        'img' => 'endulzamientos.jpeg',
        'desc' => 'Endulza corazones heridos, perdona ofensas del pasado, elimina rencores, atrae ternura, armonía, en tu relación.',
    ],
    [
        'name' => 'Protégete de enemigos',
        'img' => 'proteccion-enemigos.jpeg',
        'desc' => 'Defiende tu energía y bloquea malas intenciones de personas negativas, rodéate de personas que te sumen luz.',
    ],
    [
        'name' => 'Magia blanca',
        'img' => 'magia-blanca.jpeg',
        'desc' => 'Rituales de luz y energía positiva para atraer bienestar, paz y equilibrio espiritual.',
    ],
    [
        'name' => 'Atracción de dinero',
        'img' => 'atraccion-dinero.jpeg',
        'desc' => 'Abre tus caminos financieros y activa la abundancia económica, atrae estabilidad duradera en tu vida.',
    ],
    [
        'name' => 'Mejora tu salud',
        'img' => 'mejora-salud.jpeg',
        'desc' => 'Armoniza tus vibraciones equilibrando cuerpo, mente y espíritu, y reconecta con tu esencia sagrada.',
    ],
    [
        'name' => 'Libera tu aura',
        'img' => 'libera-aura.jpeg',
        'desc' => 'Limpieza energética para eliminar cargas negativas y recuperar tu brillo personal.',
    ],
    [
        'name' => 'Expulsión de maleficios',
        'img' => 'expulsion-maleficios.jpeg',
        'desc' => 'Elimina brujerías, maldiciones y energías oscuras que afectan tu vida diaria.',
    ],
    [
        'name' => 'Ruptura de brujerías',
        'img' => 'ruptura-brujerias.jpeg',
        'desc' => 'Rompe trabajos oscuros y corta cadenas negativas que bloquean tu destino.',
    ],
    [
        'name' => 'Limpiezas energéticas',
        'img' => 'limpiezas-energeticas.jpeg',
        'desc' => 'Libérate de energías estancadas, permite que la paz y el bienestar fluyan nuevamente en tu vida.',
    ],
    [
        'name' => 'Rituales para conseguir trabajo',
        'img' => 'rituales-trabajo.jpeg',
        'desc' => 'Atracción de oportunidades laborales y apertura de caminos profesionales.',
    ],
    [
        'name' => 'Unión familiar',
        'img' => 'union-familiar.jpeg',
        'desc' => 'Fortalece el amor y el respeto entre tus seres queridos y vive en un entorno de armonía y bienestar.',
    ],
    [
        'name' => 'Protección contra envidias',
        'img' => 'proteccion-envidia.jpeg',
        'desc' => 'Reforza tu campo energético, cerrando el paso a la envidia y protege tu energía de malas vibraciones.',
    ],
    [
        'name' => 'Éxito en negocios',
        'img' => 'exito-negocios.jpeg',
        'desc' => 'Rituales para atraer clientes, prosperidad y estabilidad en tus proyectos.',
    ],
    [
        'name' => 'Rituales de prosperidad',
        'img' => 'prosperidad.jpeg',
        'desc' => 'Abre tus caminos, con rituales que atraen abundancia y prosperidad en tu vida personal.',
    ],
    [
        'name' => 'Rituales para la suerte',
        'img' => 'suerte.jpeg',
        'desc' => 'Atrae la buena suerte y favorece tus oportunidades en juegos de azar, proyectos y negocios de tu vida.',
    ],
]);

// Funciones helper para MVC
function render($view, $data = []) {
    extract($data);
    require VIEWS_PATH . '/' . $view . '.php';
}

// Sanitiza la URI para prevenir ataques de path traversal y otros caracteres maliciosos
function getSanitizedUri() {
    $rawUri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $rawUri = str_replace(['%00', "\0", '..'], '', $rawUri);
    if (!preg_match('/^[a-zA-Z0-9\-_\/]*$/', $rawUri)) {
        return null;
    }
    return $rawUri;
}

// Genera URL de asset con cache-busting basado en tiempo de modificación
function asset($path) {
    $fullPath = PUBLIC_PATH . '/' . ltrim($path, '/');
    if (file_exists($fullPath)) {
        $version = filemtime($fullPath);
        return BASE_URL . '/' . ltrim($path, '/') . '?v=' . $version;
    }
    return BASE_URL . '/' . ltrim($path, '/');
}
