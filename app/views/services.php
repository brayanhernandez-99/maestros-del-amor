<section id="services" class="carousel">
    <div class="reel">
        <?php foreach (SERVICES as $service): ?>
            <?php $serviceName = $service['name']; ?>
            <?php $imgPath = '/images/services/' . $service['img']; ?>
            <article>
                <a href="<?= asset($imgPath) ?>" class="image featured" target="_blank">
                    <img src="<?= asset($imgPath) ?>" alt="<?= htmlspecialchars($serviceName) ?>" loading="lazy" />
                </a>
                <header>
                    <h3><a href="<?= getWhatsappUrl($serviceName); ?>" target="_blank"><?= htmlspecialchars($serviceName) ?></a></h3>
                </header>
                <p><?= htmlspecialchars($service['desc']) ?></p>
                <?php include LAYOUTS_PATH . '/whatsapp.php'; ?>
            </article>
        <?php endforeach; ?>
    </div>
</section>
