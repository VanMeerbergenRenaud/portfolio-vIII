<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<?php get_header(); ?>
    <main>
        <section class="p404">
            <h2 role="heading" aria-level="2">Page non trouvée.</h2>
            <p>La page que vous recherchez n’existe pas ou à changer d’adresse.</p>
            <a href="<?= get_home_url(); ?>" class="basic" title="Retour à l'accueil">
                Retourner à l'accueil
            </a>
            <img src="<?= get_field('logo', 'option'); ?>" alt="logo de Renaud">
        </section>
    </main>
<?php get_footer(); ?>