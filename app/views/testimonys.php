<section id="testimonys" class="col-4 col-12-mobile">
    <header>
        <h2 class="icon solid fa-camera circled"><span class="label">Photos</span></h2>
    </header>
    <div class="row gtr-25">
        <?php for ($i = 1; $i <= 12; $i++): ?>
        <div class="col-6">
            <?php $imgPath = '/images/testimonys/testimony-' . $i . '.jpeg'; ?>
            <a href="<?= asset($imgPath) ?>" class="image fit" target="_blank">
                <img src="<?= asset($imgPath) ?>" alt="Testimonio <?= $i ?>" loading="lazy" />
            </a>
        </div>
        <?php endfor; ?>
    </div>
</section>
