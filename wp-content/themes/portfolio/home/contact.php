<section class="card contact" aria-label="Section du formulaire de contact">
    <h3 role="heading" aria-level="3" class="hidden">Formulaire de contact</h3>
    <div class="card-content contact__container">
        <p class="contact__title"><?= get_field('contact-title'); ?></p>
        <p class="contact__text"><?= get_field('contact-text'); ?></p>
        <img src="<?= get_field('contact-img'); ?>" alt="selfie de Renaud">

        <?php
        $feedback = hepl_session_get('hepl_contact_form_feedback') ?? false;
        $errors = hepl_session_get('hepl_contact_form_errors') ?? [];
        ?>

        <?php if ($feedback): ?>
            <div class="success">
                <p><?= get_field('success-message'); ?></p>
            </div>
        <?php else: ?>
            <form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="POST" class="contact__form">
                <?php if ($errors): ?>
                    <div class="error">
                        <img src="<?= get_field('error-icon'); ?>" alt="memoji IOS de Renaud">
                        <p><?= get_field('error-message'); ?></p>
                    </div>
                <?php endif; ?>
                <fieldset class="contact__info">
                    <div class="contact__info__field">
                        <label for="nom">Nom<span style="color: #ff3e3e">*</span></label>
                        <input type="text" name="nom" id="nom" placeholder="Lepont">
                        <?php if ($errors['nom'] ?? null): ?>
                            <p><?= $errors['nom']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="contact__info__field">
                        <label for="prénom">Prénom<span style="color: #ff3e3e">*</span></label>
                        <input type="text" name="prénom" id="prénom" placeholder="John">
                        <?php if ($errors['prénom'] ?? null): ?>
                            <p><?= $errors['prénom']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="contact__info__field">
                        <label for="businessName">Nom d'entreprise<span style="color: #ff3e3e">*</span></label>
                        <input type="text" name="businessName" id="businessName" placeholder="Black Rock">
                        <?php if ($errors['businessName'] ?? null): ?>
                            <p><?= $errors['businessName']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="contact__info__field">
                        <label for="email">Adresse mail<span style="color: #ff3e3e">*</span></label>
                        <input type="email" name="email" id="email" placeholder="john.lepont@gmail.com" autocomplete>
                        <?php if ($errors['email'] ?? null): ?>
                            <p><?= $errors['email']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="contact__info__field">
                        <label for="message">Message<span style="color: #ff3e3e">*</span></label>
                        <textarea name="message" id="message" class="field__textarea" rows="5" placeholder="Veuillez écrire votre message…"></textarea>
                        <?php if ($errors['message'] ?? null): ?>
                            <p><?= $errors['message']; ?></p>
                        <?php endif; ?>
                    </div>
                </fieldset>
                <div class="contact__footer">
                    <input type="hidden" name="action" value="hepl_contact_form" />
                    <input type="hidden" name="contact_nonce" value="<?= wp_create_nonce('hepl_contact_form'); ?>" />
                    <button type="submit">
                        Envoyer
                    </button>
                </div>
            </form>
        <?php endif; ?>
    </div>
</section>