<?php /* Template Name: Projects page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <section class="hero" aria-label="Section de présentation de mes projets">

        </section>
    </main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>