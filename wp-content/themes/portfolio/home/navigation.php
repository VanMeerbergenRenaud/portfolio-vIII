<nav id="navigation" class="navigation" role="navigation" aria-label="Menu de navigation principal" itemscope itemtype="http://schema.org/SiteNavigationElement" tabindex="0">
    <h2 class="hidden" role="heading" aria-level="2">Menu de navigation</h2>
    <a href="<?= get_home_url(); ?>" class="navigation__link" title="Retour à l'accueil" itemprop="url">
        <span class="tooltip">A votre service</span>
        <span itemprop="alternateName">Renaud Vmb</span>
    </a>
    <ul role="menu" class="navigation__menu" tabindex="0">
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
    <a href="https://github.com/VanMeerbergenRenaud" class="navigation__social-link" title="Vers mon profil Github" rel="noopener" target="_blank" itemprop="url">
        <img src="<?= get_field('github', 'option'); ?>" alt="icône du site Github" itemprop="image">
    </a>
</nav>