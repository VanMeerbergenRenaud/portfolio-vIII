        <footer role="contentinfo" tabindex="0">
            <ul>
                <?php if (have_rows('footer-links', 'option')) :
                    while (have_rows('footer-links', 'option')) : the_row();
                        $link = get_sub_field('link');
                        $text = get_sub_field('text');
                        ?>
                        <li itemscope itemtype="http://schema.org/SiteNavigationElement" tabindex="0">
                            <a href="<?= $link; ?>" tabindex="0" class="cta-border" title="Vers la page <?= $text; ?>" itemprop="url">
                                <span itemprop="name"><?= $text; ?></span>
                            </a>
                        </li>
                    <?php endwhile;
                endif; ?>
            </ul>
            <p itemscope itemtype="https://schema.org/CreativeWork">
                &copy; <span itemprop="datePublished">2023</span>
                <a href="<?= get_home_url(); ?>" itemprop="author"
                   title="Retourner à l'accueil"><?= get_bloginfo('name'); ?></a>.
                Tous droits réservés.
            </p>
        </footer>
        <?php
            if (is_front_page() || is_page('projets') || is_singular('projets')) {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/site.js"></script>';
            } elseif (is_page('contact')) {
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/site.js"></script>';
                echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/form.js"></script>';
            } else {
                echo "<script>document.documentElement.classList.add('js-enabled');</script>";
            }
        ?>
        </body>
        </html>