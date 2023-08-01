<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <section class="contact" aria-label="Section des informations et du formulaire de contact">
            <h2 role="heading" aria-level="2"><?= get_field('contact-title'); ?></h2>
            <h3 role="heading" aria-level="3"><?= get_field('contact-subtitle'); ?></h3>

            <?php if (have_rows('contact-infos')) : ?>
                <?php while (have_rows('contact-infos')) : the_row(); ?>
                    <?php
                    $text = get_sub_field('text');
                    $linkText = get_sub_field('link-text');
                    $linkUrl = get_sub_field('link-url');
                    $microdataProperty = strtolower(str_replace(' ', '-', $linkText));
                    ?>
                    <div class="infos" itemprop="contactPoint" itemscope itemtype="https://schema.org/ContactPoint">
                        <p>
                            <?= $text; ?>
                            <a href="<?= $linkUrl; ?>" title="<?= $linkText; ?>" itemprop="url">
                                <span itemprop="name"><?= $linkText; ?></span>
                            </a>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>

    </main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>