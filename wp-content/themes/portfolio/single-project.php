<?php /* Template Name: Project page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <article class="project">
            <span class="project__span"><?= get_field('category'); ?>&nbsp;|&nbsp;<?= get_field('name'); ?></span>
            <h2 role="heading" aria-level="2"><?= get_field('title'); ?></h2>
            <section aria-label="Section de details sur la réalisation de mon projet">
                <h3 role="heading" aria-level="3">Détails sur le projet.</h3>
                <div class="details jack">
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
                <div class="details jack2">
                    <ul role="list">
                        <li>
                            <span>Description</span>
                            <p><?= get_field('description'); ?></p>
                        </li>
                        <li>
                            <span>Temps de réalisation</span>
                            <p>
                                <time datetime="2022-09"><?= get_field('debut'); ?></time>
                                &nbsp;-&nbsp;
                                <time datetime="2022-12"><?= get_field('fin'); ?></time>
                            </p>
                        </li>
                        <li>
                            <span>Catégorie</span>
                            <p><?= get_field('categorie'); ?></p>
                        </li>
                    </ul>
                    <a href="#" class="basic" title="Vers le site du projet">Visiter le site</a>
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