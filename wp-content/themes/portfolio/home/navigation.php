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
    <button class="theme-toggle tumbler__wrapper" id="theme-toggle" title="Thème clair &amp; sombre" aria-label="auto" aria-live="polite">
        <svg class="sun-and-moon" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24">
            <mask class="moon" id="moon-mask">
                <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
                <circle cx="24" cy="10" r="6" fill="black"></circle>
            </mask>
            <circle class="sun" cx="12" cy="12" r="6" mask="url(#moon-mask)" fill="currentColor"></circle>
            <g class="sun-beams" stroke="currentColor">
                <line x1="12" y1="1" x2="12" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="23"></line>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                <line x1="1" y1="12" x2="3" y2="12"></line>
                <line x1="21" y1="12" x2="23" y2="12"></line>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </g>
        </svg>
    </button>
    <a href="https://github.com/VanMeerbergenRenaud" class="navigation__social-link" title="Vers mon profil Github" rel="noopener" target="_blank" itemprop="url">
        <img src="<?= get_field('github', 'option'); ?>" alt="icône du site Github" itemprop="image">
    </a>
</nav>