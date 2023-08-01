<section class="card hero" aria-label="Section d'accueil et de bienvenue">
    <meta itemprop="name" content="Renaud Van Meerbergen">
    <meta itemprop="jobTitle" content="Développeur web front-end">
    <div class="card-content">
        <h2 role="heading" aria-level="2"><?= get_field('hero-title'); ?></h2>
        <p itemprop="description"><?= get_field('hero-text'); ?></p>
        <img itemprop="image" src="<?= get_field('hero-img'); ?> " alt="Selfie de Renaud">
    </div>
</section>