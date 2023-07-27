<section class="about" aria-label="Section de présentation de Renaud">
    <h3 role="heading" aria-level="3"><?= get_field('about-title'); ?></h3>
    <ul role="list">
        <?php if (have_rows('about-description')) :
            while (have_rows('about-description')) : the_row();
                $subtitle = get_sub_field('about-subtitle');
                $text = get_sub_field('about-text');
                ?>
                <li><?= $subtitle; ?>
                    <p><?= $text; ?></p>
                </li>
            <?php endwhile;
        endif; ?>
    </ul>
    <span><?= get_field('about-nb'); ?></span>
</section>