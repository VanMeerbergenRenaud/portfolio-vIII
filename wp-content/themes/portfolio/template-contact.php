<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <section class="contact" aria-label="Section des informations et du formulaire de contact">
            <h2 role="heading" aria-level="2"><?= get_field('contact-title'); ?></h2>
            <h3 role="heading" aria-level="3"><?= get_field('contact-subtitle'); ?></h3>
            <div class="infos">
                <p>
                    Vous pouvez m’envoyer un mail sur
                    <a href="mailto:renaud.vanmeerbergen@gmail.com" title="Adresse e-mail" itemprop="email">renaud.vanmeerbergen@gmail.com</a>
                </p>
            </div>
            <div class="infos">
                <p>
                    Ou m’appeler au
                    <a href="tel:+32470596065" title="Numéro de téléphone" itemprop="telephone">+32(0) 470 59 60 65</a>
                </p>
            </div>
            <div class="infos" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                <p>
                    Ou venir chez moi
                    <a href="https://goo.gl/maps/kr7E2xawPNX4Wn2p7" title="Adresse physique">
                        <span itemprop="streetAddress">Rue Petit Bioleux 18</span>,<br>
                        <span itemprop="postalCode">4122</span> <span itemprop="addressLocality">Plainevaux</span>,<br>
                        <span itemprop="addressCountry">Belgique</span>
                    </a>
                </p>
            </div>
        </section>
        <section class="form" aria-label="Section du formulaire de contact">
            <h3 role="heading" aria-level="3">Formulaire de contact</h3>
            <div class="form__container">
                <?php get_template_part('contact_form'); ?>
            </div>
        </section>
    </main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>