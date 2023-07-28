<section class="card tools" aria-label="Section présentant mes divers outils de développement">
    <div class="card-content">
        <h3 role="heading" aria-level="3"><?= get_field('tools-title'); ?></h3>
        <ul role="list" class="top">
            <?php
            $images = get_field('tools-list1');
            if ($images):
                foreach ($images as $image): ?>
                    <li>
                        <img src="<?= esc_url($image); ?>" alt="logo d'un de mes divers outils">
                    </li>
                <?php endforeach;
            endif;
            ?>
        </ul>
        <ul role="list" class="bottom">
            <?php
            $images = get_field('tools-list2');
            if ($images):
                foreach ($images as $image): ?>
                    <li>
                        <img src="<?= esc_url($image); ?>" alt="logo d'un de mes divers outils">
                    </li>
                <?php endforeach;
            endif;
            ?>
        </ul>
    </div>
</section>