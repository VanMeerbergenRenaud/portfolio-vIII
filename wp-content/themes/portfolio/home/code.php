<section class="code" aria-label="Section présentant le type de code que je produis">
    <h3 role="heading" aria-level="3"><?= get_field('code-title'); ?></h3>
    <p><?= get_field('code-text'); ?></p>
    <div>
        <img src="<?= get_field('code-img'); ?>" alt="liste des 6 éléments fondamentaux pour un code de qualité (bonne sémantique, accessibilité clavier, VoiceOver, meta-description, meta-attribute et microdata)">
    </div>
</section>
<section class="responsive" aria-label="Section présentant l'adaptation de mon design à toutes les tailles d'écrans">
    <h3 role="heading" aria-level="3"><?= get_field('responsive-title'); ?></h3>
    <p><?= get_field('responsive-text'); ?></p>
    <div>
        <img src="<?= get_field('responsive-img'); ?>" alt="exemple d'un site internet responsive sur 4 appareils différentes">
    </div>
</section>