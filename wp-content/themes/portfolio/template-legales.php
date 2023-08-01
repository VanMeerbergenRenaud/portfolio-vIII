<?php /* Template Name: Mentions legales page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <section class="mentions-legales" aria-label="Section des mentions légales du site">
            <h2 role="heading" aria-level="2"><?= get_field('mentions-title'); ?></h2>
            <p class="date">
                Dernière modification le
                <?php
                $date = get_the_modified_date('Y-m-d H:i:s');
                $date_format_french = get_the_modified_date('j F Y');
                ?>
                <time datetime="<?= esc_attr($date); ?>"><?= esc_html($date_format_french); ?></time>
            </p>
            <ul itemscope itemtype="http://schema.org/Person" role="list">
                <li>
                    <h3 role="heading" aria-level="3">Introduction</h3>
                    <p itemprop="description">
                        Renaud Van Meerbergen traitera avec le plus grand soin les données personnelles qui lui ont été communiquées. Renaud Van Meerbergen les traitera en toute confidentialité et ne les utilisera qu’aux fins pour lesquelles elles lui ont été communiquées. Ces données peuvent être enregistrées dans une ou plusieurs bases de données de Renaud Van Meerbergen et ne seront pas communiquées à des tiers sans le consentement de la personne concernée. Cette dernière peut en outre toujours réclamer la communication de ses données en notre possession, et en demander rectification et suppression.
                    </p>
                </li>
                <li>
                    <h3 role="heading" aria-level="3">Identité</h3>
                    <p>
                        <span itemprop="name">Renaud Van Meerbergen</span><br>
                            <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress">Rue Petit Bioleux, 18</span><br>
                            <span itemprop="postalCode">4122</span> <span itemprop="addressLocality">Plainevaux</span><br>
                            <span itemprop="addressCountry">Belgique</span>
                        </span>
                    </p>
                </li>
                <li>
                    <h3 role="heading" aria-level="3">Contact</h3>
                    <p>
                        Téléphone : <span itemprop="telephone">+32 (0)470 59 60 65</span><br>
                        E-mail : <span itemprop="email">renaud.vanmeerbergen@gmail.com</span>
                    </p>
                </li>
                <li>
                    <h3 role="heading" aria-level="3">Hébergement</h3>
                    <p itemscope itemtype="https://schema.org/Organization">
                        <span itemprop="name">HOSTINGER</span><br>
                            <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span itemprop="streetAddress">61 Lordou Vironos Street</span><br>
                            <span itemprop="postalCode">6023</span> <span itemprop="addressLocality">Larnaca</span><br>
                            <span itemprop="addressCountry">Chypre</span>
                        </span><br>
                        <a href="https://www.hostinger.fr" itemprop="url" title="Vers le site Hostinger" target="_blank">https://www.hostinger.fr</a>
                    </p>
                </li>
            </ul>
            <ul role="list">
                <?php if (have_rows('mentions-list')) :
                    while (have_rows('mentions-list')) : the_row();
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        ?>
                        <li>
                            <h3 role="heading" aria-level="3"><?= $title; ?></h3>
                            <p><?= $text; ?></p>
                        </li>
                    <?php endwhile;
                endif; ?>
            </ul>
        </section>
    </main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>