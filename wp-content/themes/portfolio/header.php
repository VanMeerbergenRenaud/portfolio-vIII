<!DOCTYPE html>
<html lang="fr-BE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Meta donnée du site -->
    <meta name="author" content="<?= get_bloginfo('name'); ?>">
    <meta name="title" content="Renaud Vmb">
    <meta name="keywords" content="Portfolio, Renaud Van Meerbergen, Front-end, Back-end, Fullstack, Développeur web, étudiant à l'HEPL, Développeur Wordpress">
    <meta name="description" content="Portfolio de Renaud Van Meerbergen, développeur web front-end à l’HEPL. En tant que passionné, je donne vie à vos idées à travers des expériences digitales captivantes.">

    <!-- Icônes -->
    <link rel="icon" href="https://renaud-vmb.com/favicon.ico" type="image/x-icon">

    <!-- OpenGraphs -->
        <!-- Facebook -->
    <meta property="og:url" content="https://renaud-vmb.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= get_the_title(); ?> - <?= get_bloginfo('name'); ?>">
    <meta property="og:description" content="Découvrez mon portfolio et mes réalisations artistiques.">
    <meta property="og:image" content="https://scontent.fbru5-1.fna.fbcdn.net/v/t39.30808-6/347853160_203938959239898_8482621575841617036_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=Q0MWwvD8L2QAX98jOFC&_nc_ht=scontent.fbru5-1.fna&oh=00_AfDYkUsAAL3dduy1jcx2afjZ0g2Oe2ajWe74zkGbi2SGig&oe=64D452A3">
    <meta property="og:profile_url" content="https://www.facebook.com/renaud.vanmeerbergen">
        <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@RenaudVmb">
    <meta name="twitter:title" content="<?= get_the_title(); ?> - <?= get_bloginfo('name'); ?>">
    <meta name="twitter:description" content="Découvrez mon portfolio et mes réalisations artistiques.">
    <meta name="twitter:image" content="https://twitter.com/RenaudVmb/photo">
    <meta name="twitter:url" content="https://renaud-vmb.com/">
        <!-- Profil details -->
    <meta property="profile:first_name" content="Renaud">
    <meta property="profile:last_name" content="Van Meerbergen">

    <!-- Meta details -->
    <link rel="canonical" href="https://renaud-vmb.com">

    <!-- Stylesheets -->
    <?php
    $page_styles = array(
        'accueil' => 'site',
        'contact' => 'contact',
        'mentions-legales' => 'mentions-legales',
        'projets' => 'projets',
        /* Pour les projets en post */
        'clinicoeurs' => 'projet',
        'portfolio-v2' => 'projet',
        'cv-airbnb' => 'projet',
        'jf-stassen' => 'projet',
        'portfolio-v1' => 'projet',
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

    <!-- Title -->
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
<body itemscope itemtype="https://schema.org/Person">
<!--[if IE]>
<p class="browserupgrade">
    Vous utilisez un navigateur <strong>obsolète</strong>.
    Veuillez <a href="https://browsehappy.com/" title="vers le site browsehappy">mettre à niveau votre navigateur</a> pour améliorer votre expérience et votre sécurité.
</p>
<![endif]-->
<noscript>
    <p class="no-js__message">
        Pour accéder à toutes les fonctionnalités de ce site, vous devez activer JavaScript.<br>
        Voici les <a href="https://www.enable-javascript.com/fr/" title="vers le site enable-javascript">instructions pour activer JavaScript dans votre navigateur Web</a>.
    </p>
</noscript>
<header role="banner">
    <h1 class="hidden"><?= get_the_title(); ?></h1>
    <?php get_template_part('home/navigation'); ?>
</header>