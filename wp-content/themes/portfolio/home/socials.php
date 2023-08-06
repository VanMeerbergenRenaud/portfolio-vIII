<section class="card twitter" aria-label="Section de mon réseau social principal" tabindex="0">
    <div class="card-content">
        <h3 role="heading" aria-level="3" class="hidden">Réseau social Twitter</h3>
        <img class="twitter__img" src="<?= get_field('twitter-logo'); ?>" alt="logo actuel de l'entreprise Twitter">
        <div class="twitter__infos">
            <p><?= get_field('twitter-title'); ?></p>
            <span><?= get_field('twitter-pseudo'); ?></span>
            <img src="<?= get_field('twitter-img'); ?>" alt="selfie de Renaud">
        </div>
        <p class="twitter__text"><?= get_field('twitter-text'); ?></p>
        <a class="twitter__link basic" href="<?= get_field('twitter-link'); ?>" title="Vers le profil Twitter" rel="noopener" target="_blank">Visiter le profil</a>
    </div>
</section>
<section class="card github" aria-label="Section de mon réseau social de développeur" tabindex="0">
    <div class="card-content">
        <h3 role="heading" aria-level="3" class="hidden">Réseau social Github</h3>
        <div class="github__container">
            <div class="logo">
                <img src="<?= get_field('github-logo'); ?>" alt="logo de l'entreprise Github">
                <span>Exclusif</span>
            </div>
            <p class="title"><?= get_field('github-title'); ?></p>
            <p class="text"><?= get_field('github-text'); ?></p>
            <a class="link basic" href="<?= get_field('github-link'); ?>" title="Vers le profil Twitter" rel="noopener" target="_blank">Visiter le profil</a>
        </div>
        <!-- Github Card-->
        <div class="github__card none">
            <h4 role="heading" aria-level="4"><?= get_field('github-card-title'); ?></h4>
            <p><?= get_field('github-card-text'); ?></p>
            <img src="<?= get_field('github-card-img'); ?>" class="github__card__img" alt="Renaud en beau costume en plein défilé de mode">
            <ul role="list">
                <?php if (have_rows('github-card-list')) :
                    while (have_rows('github-card-list')) : the_row();
                        $icon = get_sub_field('icon');
                        $number = get_sub_field('number');
                        $text = get_sub_field('text');
                        ?>
                        <li>
                            <img src="<?= $icon; ?>" alt="icône de Github">
                            <span class="number"><?= $number; ?></span>
                            <span><?= $text; ?></span>
                        </li>
                    <?php endwhile;
                endif; ?>
            </ul>
        </div>
    </div>
</section>