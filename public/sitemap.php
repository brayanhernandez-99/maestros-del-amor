<?php
$envFile = __DIR__ . '/../.env';
if (file_exists($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line && strpos($line, '#') !== 0 && strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            putenv(trim($key) . '=' . trim($value));
        }
    }
}

$baseUrl = getenv('APP_URL');
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
  <url>
    <loc><?= $baseUrl ?>/</loc>
    <lastmod><?= date('Y-m-d') ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>1.0</priority>
    <image:image>
      <image:loc><?= $baseUrl ?>/images/services/amarres-amor.jpeg</image:loc>
      <image:title>Amarres de Amor</image:title>
    </image:image>
    <image:image>
      <image:loc><?= $baseUrl ?>/images/services/rituales-atraccion.jpeg</image:loc>
      <image:title>Rituales de Atracción</image:title>
    </image:image>
    <image:image>
      <image:loc><?= $baseUrl ?>/images/services/magia-blanca.jpeg</image:loc>
      <image:title>Magia Blanca</image:title>
    </image:image>
    <image:image>
      <image:loc><?= $baseUrl ?>/images/testimonys/testimony-1.jpeg</image:loc>
      <image:title>Testimonios de Clientes</image:title>
    </image:image>
  </url>
</urlset>
