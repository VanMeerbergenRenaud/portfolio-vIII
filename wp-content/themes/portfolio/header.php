<!DOCTYPE html>
<html lang="fr-BE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta donnée du site -->
    <meta name="author" content="<?= get_bloginfo('name'); ?>">
    <meta name="description" content="<?= get_bloginfo('description'); ?>">

    <link rel="icon" href="https://renaud-vmb.com/favicon.ico" type="image/x-icon">

    <?php
    $page_styles = array(
        'accueil' => 'site',
        'projets' => 'projets',
        'projet' => 'projet',
        'contact' => 'contact',
        'mentions-legales' => 'mentions-legales',
    );

    $page_slug = get_post_field('post_name');
    $stylesheet_uri = get_stylesheet_directory_uri() . '/public/css/';

    if (isset($page_styles[$page_slug])) {
        $stylesheet = $page_styles[$page_slug];
        echo "<link rel='stylesheet' type='text/css' href='$stylesheet_uri$stylesheet.css'>";
    } elseif (is_404()) {
        $p404 = 404;
        echo "<link rel='stylesheet' type='text/css' href='$stylesheet_uri$p404.css'>";
    } else {
        $basic = 'site';
        echo "<link rel='stylesheet' type='text/css' href='$stylesheet_uri$basic.css'>";
    }
    ?>

    <title>
        <?php
        $page_title = single_post_title('', false);

        if (is_404()) {
            echo '404 - Page non trouvée';
        } else {
            echo $page_title . ' - ' . get_bloginfo('name');
        }
        ?>
    </title>
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">Vous utilisez un navigateur <strong> obsolète </strong>. Veuillez
    <a href="https://browsehappy.com/" title="vers le site browsehappy"> mettre à niveau votre navigateur </a> pour améliorer votre expérience et votre sécurité.
</p>
<![endif]-->
<p class="no-js__message">
    Pour accéder à toutes les fonctionnalités de ce site, vous devez activer JavaScript.<br>
    Voici les <a href="https://www.enable-javascript.com/fr/" title="vers le site enable-javascript">
    instructions pour activer JavaScript dans votre navigateur Web</a>.
</p>
<header role="banner">
    <h1 class="hidden"><?= get_bloginfo('name'); ?></h1>
    <?php get_template_part('home/navigation'); ?>
</header>