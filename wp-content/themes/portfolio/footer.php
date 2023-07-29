        <footer>
            <ul>
                <?php if (have_rows('footer-links', 'option')) :
                    while (have_rows('footer-links', 'option')) : the_row();
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
            <p>
                © 2023 <a href="https://renaud-vmb.com" title="Retourner à l'accueil"><?= get_bloginfo('name'); ?></a>. Tous droits réservés.
            </p>
        </footer>
        <?php
            if (is_front_page()) {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/site.js"></script>';
            } elseif (is_page('contact')) {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/form.js"></script>';
            } elseif (is_page('projets')) {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/projets.js"></script>';
            } else {
                echo "<script>document.documentElement.classList.add('js-enabled');</script>";
            }
        ?>
    </body>
</html>