<?php

class HomeController {
    public function index() {
        $services = SERVICES;
        $ogTitle = APP_NAME;
        $ogDescription = 'Consulta con nuestros maestros especialistas. Amarres de amor, rituales, limpiezas energéticas y más. Resultados garantizados.';
        $ogImage = asset('/images/background.jpg');
        $ogUrl = BASE_URL;

        render('home', [
            'services' => $services,
            'ogTitle' => $ogTitle,
            'ogDescription' => $ogDescription,
            'ogImage' => $ogImage,
            'ogUrl' => $ogUrl,
        ]);
    }
}
