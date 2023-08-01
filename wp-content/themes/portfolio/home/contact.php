<section class="card contact form" aria-label="Section du formulaire de contact">
    <h3 role="heading" aria-level="3" class="hidden">Formulaire de contact</h3>
    <div class="card-content form__container">
        <img src="<?= get_field('contact-img'); ?>" class="contact__img" alt="selfie de Renaud">
        <p class="contact__title"><?= get_field('contact-title'); ?></p>
        <p class="contact__text"><?= get_field('contact-text'); ?></p>
        <?php get_template_part('contact_form'); ?>
    </div>
</section>