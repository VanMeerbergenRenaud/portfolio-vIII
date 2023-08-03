<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <article class="project">
            <span class="project__span"><?= get_field('type'); ?>&nbsp;|&nbsp;<?= get_field('name'); ?></span>
            <h2 role="heading" aria-level="2"><?= get_field('title'); ?></h2>
            <section aria-label="Section de details sur la réalisation de mon projet">
                <h3 role="heading" aria-level="3">Détails sur le projet.</h3>
                <div class="details">
                    <ul role="list">
                        <?php if (have_rows('details-list')) :
                            while (have_rows('details-list')) : the_row();
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                ?>
                                <li>
                                    <span><?= $title ?></span>
                                    <p>
                                        <?= $text ?>
                                    </p>
                                </li>
                            <?php endwhile;
                        endif; ?>
                    </ul>
                </div>
                <div class="details">
                    <span>Contexte</span>
                    <p><?= get_field('context'); ?></p>
                </div>
                <div class="details">
                    <ul role="list">
                        <li>
                            <span>Description</span>
                            <p><?= get_field('description'); ?></p>
                        </li>
                        <li>
                            <span>Temps de réalisation</span>
                            <p>
                                <time datetime="<?= get_field('date-debut'); ?>"><?= get_field('date-debut'); ?></time>
                                &nbsp;-&nbsp;
                                <time datetime="<?= get_field('date-fin'); ?>"><?= get_field('date-fin'); ?></time>
                            </p>
                        </li>
                        <li>
                            <span>Catégorie</span>
                            <p><?= get_field('category'); ?></p>
                        </li>
                    </ul>
                    <a href="<?= get_field('project-link'); ?>" class="basic" title="Vers le site du projet : <?= get_field('name'); ?>">Visiter le site</a>
                </div>
            </section>
            <section class="gallery" aria-label="Section de présentation des mockups du site internet réalisé">
                <ul>
                    <?php
                    $images = get_field('img-mockup');
                    if ($images):
                        foreach ($images as $image): ?>
                            <li>
                                <img src="<?= esc_url($image); ?>" alt="mockup du projet sur un iphone">
                            </li>
                        <?php endforeach;
                    endif;
                    ?>
                </ul>
            </section>
        </article>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>