<nav class="navigation" role="navigation" aria-label="Main" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <h2 class="hidden" role="heading" aria-level="2">Menu de navigation</h2>
    <a href="<?= get_home_url(); ?>" title="Retour à l'accueil" itemprop="url">
        <span itemprop="name">Renaud Vmb</span>
    </a>
    <ul role="menu">
        <?php if (have_rows('navigation', 'option')) :
            while (have_rows('navigation', 'option')) : the_row();
                $link = get_sub_field('link');
                $text = get_sub_field('text');
                ?>
                <li itemscope itemtype="http://schema.org/SiteNavigationElement">
                    <a href="<?= $link; ?>" tabindex="0" title="Vers la page <?= $text; ?>" itemprop="url">
                        <span itemprop="name"><?= $text; ?></span>
                    </a>
                </li>
            <?php endwhile;
        endif; ?>
    </ul>
    <a href="https://github.com/VanMeerbergenRenaud" title="Vers mon profil Github" target="_blank" itemprop="url">
        <img src="<?= get_field('github', 'option'); ?>" alt="icône du site Github" itemprop="image">
    </a>
</nav>