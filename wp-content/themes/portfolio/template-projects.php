<?php /* Template Name: Projects page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <section id="cards" class="projects" aria-label="Section de présentation de mes projets">
            <h2 role="heading" aria-level="2">Mes projets.</h2>
            <?php if (have_rows('projets')) :
                while (have_rows('projets')) : the_row();
                    $title = get_sub_field('title');
                    $category = get_sub_field('category');
                    $text = get_sub_field('text');
                    $image = get_sub_field('img');
                    $link = get_sub_field('link');
                    ?>
                    <article class="card" itemscope itemtype="http://schema.org/CreativeWork" tabindex="0">
                        <div class="card-content projects__infos">
                            <div>
                                <h3 role="heading" aria-level="3" itemprop="name"><?= $title; ?></h3>
                                <span itemprop="genre"><?= $category; ?></span>
                                <p itemprop="description"><?= $text; ?></p>
                                <a href="<?= $link; ?>" class="basic" itemprop="url">Visiter le projet</a>
                            </div>
                            <img src="<?= $image; ?>" itemprop="image" alt="mockup du projet sur 4 appareils différents">
                        </div>
                        <a href="<?= $link; ?>" class="projects__link" title="Visiter le projet : <?= $title; ?>" itemprop="url"></a>
                    </article>
                <?php endwhile;
            endif;
            ?>
        </section>
        <section class="cta" tabindex="0">
            <?php
            $cta = get_field('cta');
            if ($cta) :
                $subtitle = $cta['subtitle'];
                $title = $cta['title'];
                $text = $cta['text'];
                $img = $cta['img'];
                ?>
                <span><?= esc_html($subtitle); ?></span>
                <h3 role="heading" aria-level="3"><?= esc_html($title); ?></h3>
                <p><?= esc_html($text); ?></p>
                <a href="<?= esc_url(get_home_url() . '/contact'); ?>" class="basic" title="Vers la page de contact">Prendre rendez-vous</a>
                <img src="<?= $img; ?>" alt="mockup de présentation sur un téléphone, 2 ordinateurs et un ipad le projet">
                <a href="<?= esc_url(get_home_url() . '/contact'); ?>" class="link" tabindex="-1"></a>
            <?php endif; ?>
        </section>
    </main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>
