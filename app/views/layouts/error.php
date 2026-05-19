<!DOCTYPE HTML>
<html lang="es">
<head>
    <title>404 - Página no encontrada | Maestros del Amor</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="icon" href="<?= asset('images/favicon.ico') ?>" type="image/x-icon">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Source Sans Pro', Arial, sans-serif;
            background: linear-gradient(135deg, #1f1920 0%, #483949 100%);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 2em;
        }
        .error-container {
            text-align: center;
            max-width: 500px;
        }
        .error-code {
            font-size: 8em;
            font-weight: 700;
            color: #fe4164;
            line-height: 1;
            margin-bottom: 0.2em;
        }
        .error-title {
            font-size: 1.8em;
            margin-bottom: 0.5em;
        }
        .error-text {
            font-size: 1.1em;
            color: rgba(255,255,255,0.7);
            margin-bottom: 2em;
        }
        .error-btn {
            display: inline-block;
            padding: 0.9em 2.5em;
            background: #fe4164;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1em;
            font-weight: 600;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .error-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(254,65,100,0.4);
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-code">404</div>
        <h2 class="error-title">Página no encontrada</h2>
        <p class="error-text">La página que buscas no existe o ha sido movida.</p>
        <a href="<?= BASE_URL ?>" class="error-btn">Volver al inicio</a>
    </div>
</body>
</html>
