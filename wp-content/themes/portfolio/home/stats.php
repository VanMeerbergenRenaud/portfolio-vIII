<section class="card stats" aria-label="Section présentant mes plus grandes statistiques">
    <div class="card-content">
        <h3 role="heading" aria-level="3"><?= get_field('stats-title'); ?></h3>
        <ul role="list">
            <?php if (have_rows('stats-list')) :
                while (have_rows('stats-list')) : the_row();
                    $number = get_sub_field('number');
                    $text = get_sub_field('text');
                    ?>
                    <li><?= $number; ?><span>+</span>
                        <p><?= $text; ?></p>
                    </li>
                <?php endwhile;
            endif; ?>
        </ul>
    </div>
</section>