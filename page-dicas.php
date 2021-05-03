<?php get_header(); ?>

<!-- tips -->
<section class="tips">

    <!-- header -->
    <header class="pages__header">
        <div class="container">
            <h2><?= the_title() . " - " . SITE["name"] ?></h2>
            <p>Cuidado, Amor, Dedicação e Competência</p>
        </div>
    </header>
    <!-- end of header -->

    <div class="container">

        <!-- grid -->
        <div class="tips__grid">

            <?php
                $tips = file_get_contents(__DIR__ . "/includes/tips.json");
                $tipsList = json_decode($tips, true);

                foreach($tipsList['tips'] as $tip) :
            ?>

            <!-- card -->
            <article class="tips__grid__card">

                <!-- image -->
                <div class="tips__grid__card__image">
                    <picture>
                        <source srcset="<?= get_template_directory_uri(); ?>/assets/images/<?= $tip["image"]; ?>.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $tip["image"]; ?>.jpg"
                            alt="<?= $tip['name']; ?> - Dicas <?= SITE['name']; ?>">
                    </picture>
                </div>
                <!-- end of image -->

                <!-- body -->
                <div class="tips__grid__card__body">
                    <!-- header -->
                    <header class="tips__grid__card__body__header">
                        <h3><?= $tip['name']; ?></h3>
                    </header>
                    <!-- end of header -->

                    <p><?= $tip['description'] ?></p>
                </div>
                <!-- end of body -->

            </article>
            <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of grid -->

    </div>

</section>
<!-- end of tips -->

<?php get_footer(); ?>