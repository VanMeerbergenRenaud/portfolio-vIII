<section class="card project" aria-label="Section présentant mon dernier projet" tabindex="0">
    <div class="card-content">
        <h3 role="heading" aria-level="3"><?= get_field('project-title'); ?></h3>
        <p><?= get_field('project-text'); ?></p>
        <div class="project__mockup">
            <img src="<?= get_field('project-img'); ?>" alt="exemple du site internet sur un Iphone">
            <div class="project__mockup__img">
                <a href="https://clinicoeurs.renaud-vmb.com" title="" target="_blank">
                    <!--<img src="<?php /*= get_field('project-img2'); */?>" alt="représentation de la page d'accueil du site web">-->
                    <embed type="text/html" src="https://clinicoeurs.renaud-vmb.com" width="115%" height="100%" style="transform: translate(-6.5%, 0);">
                </a>
            </div>
        </div>
    </div>
</section>