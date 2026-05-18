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
header('Content-Type: text/plain; charset=utf-8');
echo "User-agent: *\n";
echo "Allow: /\n\n";
echo "Disallow: /app/\n";
echo "Disallow: /storage/\n\n";
echo "Sitemap: " . $baseUrl . "/sitemap.xml\n";
