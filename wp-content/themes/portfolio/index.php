<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <?php get_template_part('home/hero'); ?>
        <?php get_template_part('home/about'); ?>
        <?php get_template_part('home/approach'); ?>
        <?php get_template_part('home/studies'); ?>
        <?php get_template_part('home/tools'); ?>
        <?php get_template_part('home/code'); ?>
        <?php get_template_part('home/stats'); ?>
        <?php get_template_part('home/project'); ?>
        <?php get_template_part('home/projects'); ?>
        <?php get_template_part('home/contact'); ?>
        <?php get_template_part('home/socials'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>