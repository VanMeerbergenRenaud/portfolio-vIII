<section class="card projects" aria-label="Section présentant la liste de mes derniers projets" tabindex="0">
    <div class="card-content">
        <h3 role="heading" aria-level="3"><?= get_field('projects-title'); ?></h3>
        <ul role="list">
            <?php if (have_rows('projects-list')) :
                while (have_rows('projects-list')) : the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $img = get_sub_field('img');
                    $link = get_sub_field('link');
                    ?>
                    <li tabindex="0">
                        <a href="<?= $link; ?>" title="Vers le projet" target="_blank">
                            <span class="projects__title"><?= $title; ?></span>
                            <span class="projects__text"><?= $text; ?></span>
                            <img class="projects__img" src="<?= $img; ?>" alt="section d'accueil du projet">
                        </a>
                    </li>
                <?php endwhile;
            endif; ?>
        </ul>
    </div>
</section>