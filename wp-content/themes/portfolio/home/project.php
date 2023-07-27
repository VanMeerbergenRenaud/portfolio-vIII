<section class="project" aria-label="Section présentant mon dernier projet">
    <h3 role="heading" aria-level="3"><?= get_field('project-title'); ?></h3>
    <p><?= get_field('project-text'); ?></p>
    <div class="project__mockup">
        <img src="<?= get_field('project-img'); ?>" alt="exemple du site internet sur un Iphone">
    </div>
</section>