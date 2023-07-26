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
        <h1>Page non trouvée...</h1>
        <p>Vous êtes perdu&nbsp;?</p>
        <a href="<?= get_home_url(); ?>" title="Retour à l'accueil">
            Retourner à l'accueil
        </a>
    </main>
<?php get_footer(); ?>