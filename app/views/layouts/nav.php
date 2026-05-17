<nav id="nav">
    <ul>
        <li><a href="<?= BASE_URL ?>">Home</a></li>
        <li>
            <a class="scrolly" href="#services">Servicios</a>
            <ul>
                <li>
                    <a class="scrolly" href="#services">Consulta por &hellip;</a>
                    <ul>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Amarres de amor'); ?>">Amarres de amor</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Amarres del mismo sexo'); ?>">Amarres del mismo sexo</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Rituales de atracción'); ?>">Rituales de atracción</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Endulzamientos'); ?>">Endulzamientos</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Protégete de enemigos'); ?>">Protégete de enemigos</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Magia blanca'); ?>">Magia blanca</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Atracción de dinero'); ?>">Atracción de dinero</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Mejora tu salud'); ?>">Mejora tu salud</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Libera tu aura'); ?>">Libera tu aura</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Expulsión de maleficios'); ?>">Expulsión de maleficios</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Ruptura de brujerías'); ?>">Ruptura de brujerías</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Limpiezas energéticas'); ?>">Limpiezas energéticas</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Rituales para conseguir trabajo'); ?>">Rituales para conseguir trabajo</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Unión familiar'); ?>">Unión familiar</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Protección contra envidias'); ?>">Protección contra envidias</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Éxito en negocios'); ?>">Éxito en negocios</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Rituales de prosperidad'); ?>">Rituales de prosperidad</a></li>
                        <li><a class="scrolly" target="_blank" href="<?php echo getWhatsappUrl('Rituales para la suerte'); ?>">Rituales para la suerte</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a class="scrolly" href="#comments">Testimonios</a></li>
        <li><a class="scrolly" href="#about">Contactanos</a></li>
    </ul>
</nav>

<!-- WhatsApp Float Button -->
 <?php $service = 'Consulta'; ?>
<a href="<?php echo getWhatsappUrl($service); ?>" class="whatsapp-float" target="_blank"><img src="<?= BASE_URL ?>/images/whatsapp.ico" alt="WhatsApp" /></a> 
