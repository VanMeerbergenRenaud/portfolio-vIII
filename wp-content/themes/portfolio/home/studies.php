<section class="card studies" aria-label="Section présentant mon parcours professionnel" tabindex="0">
    <div class="card-content">
        <h3 role="heading" aria-level="3"><?= get_field('studies-title'); ?></h3>
        <ul role="list">
            <?php if (have_rows('studies-list')) :
                while (have_rows('studies-list')) : the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $date = get_sub_field('date');
                    $date2 = get_sub_field('date2');
                    ?>
                    <li itemscope itemtype="https://schema.org/ResumeAction">
                        <div class="period">
                            <p>
                                <time itemprop="startTime" datetime="<?= esc_attr($date); ?>">
                                    <?= date('m/Y', strtotime($date)); ?>
                                </time>
                                &nbsp;&#x2014;&nbsp;
                                <time itemprop="endTime" datetime="<?= esc_attr($date2);?>">
                                    <?= date('m/Y', strtotime($date2)); ?>
                                </time>
                            </p>
                        </div>
                        <h4 role="heading" aria-level="4" itemprop="name"><?= $title; ?></h4>
                        <p itemprop="description"><?= $text; ?></p>
                    </li>
                <?php endwhile;
            endif; ?>
        </ul>
    </div>
</section>