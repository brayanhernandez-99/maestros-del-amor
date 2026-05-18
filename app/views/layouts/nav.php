<nav id="nav">
    <ul>
        <li><a href="<?= BASE_URL ?>">Home</a></li>
        <li>
            <a class="scrolly" href="#services">Servicios</a>
            <ul>
                <li>
                    <a class="scrolly" href="#services">Consulta por &hellip;</a>
                    <ul>
                        <?php foreach (SERVICES as $service): ?>
                            <li><a class="scrolly" target="_blank" href="<?= getWhatsappUrl($service['name']) ?>"><?= htmlspecialchars($service['name']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a class="scrolly" href="#comments">Testimonios</a></li>
        <li><a class="scrolly" href="#about">Contactanos</a></li>
    </ul>
</nav>

<?php $service = 'Consulta'; ?>
<a href="<?php echo getWhatsappUrl($service); ?>" class="whatsapp-float" target="_blank"><img src="<?= asset('images/whatsapp.ico') ?>" alt="WhatsApp" /></a> 
