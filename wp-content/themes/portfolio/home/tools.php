<section class="tools" aria-label="Section présentant mes divers outils de développement">
    <h3 role="heading" aria-level="3"><?= get_field('tools-title'); ?></h3>
    <ul role="list">
        <?php
        $images = get_field('tools-list');
        if ($images):
            foreach ($images as $image): ?>
                <li>
                    <img src="<?= esc_url($image); ?>" alt="logo d'un de mes divers outils">
                </li>
            <?php endforeach;
        endif;
        ?>
    </ul>
</section>