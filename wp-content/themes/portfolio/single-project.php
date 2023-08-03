<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <article class="project">
            <a class="back" href="<?= get_home_url() . '/projets'; ?>" title="Retourner à la page des projets">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                    <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" fill="#fff" />
                </svg>Retour aux projets
            </a>
            <span class="project__span"><?= get_field('type'); ?>&nbsp;|&nbsp;<?= get_field('name'); ?></span>
            <h2 role="heading" aria-level="2"><?= get_field('title'); ?></h2>
            <section aria-label="Section de details sur la réalisation de mon projet" id="cards">
                <h3 role="heading" aria-level="3">Détails sur le projet.</h3>
                <div class="card">
                    <div class="card-content">
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
                </div>
                <div class="card">
                    <div class="card-content">
                        <span>Contexte</span>
                        <p><?= get_field('context'); ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
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
                        <a href="<?= get_field('project-link'); ?>" class="basic" title="Vers le site du projet : <?= get_field('name'); ?>" target="_blank">Visiter le site</a>
                    </div>
                </div>
            </section>
            <section class="gallery" aria-label="Section de présentation des mockups du site internet réalisé">
                <h3 role="heading" aria-level="3" class="hidden">Gallerie photo du projet.</h3>
                <ul>
                    <?php
                    $images = get_field('img-mockup');
                    if ($images):
                        foreach ($images as $image): ?>
                            <li>
                                <img class="image" src="<?= esc_url($image); ?>" alt="mockup du projet sur un iphone, ipad et macbook">
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