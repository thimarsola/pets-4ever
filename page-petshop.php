<?php get_header(); ?>

<!-- petshop -->
<section class="petshop">

    <!-- header -->
    <header class="pages__header">
        <div class="container">
            <h2><?= the_title() . " - " . SITE["name"] ?></h2>
            <p>Os melhores produtos para o seu filho de quatro patas</p>
        </div>
    </header>
    <!-- end of header -->

    <div class="container">
        <!-- content -->
        <div class="petshop__content">

            <?php 
                $petshop = file_get_contents(__DIR__ . "/includes/petshop.json");
                $petshopList = json_decode($petshop, true);

                foreach($petshopList['petshop'] as $petshopUnit) :
            ?>

            <!-- card -->
            <article class="petshop__content__card">
                <!-- image -->
                <div class="petshop__content__card__image">
                    <picture>
                        <source
                            srcset="<?= get_template_directory_uri(); ?>/assets/images/petshop-<?= $petshopUnit['image']; ?>.webp"
                            type="images/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/petshop-<?= $petshopUnit['image']; ?>.jpg"
                            alt="<?= $petshopUnit["title"]; ?> para o seu pet você encontra aqui na <?= SITE['name']; ?>"
                            loading="lazy">
                    </picture>
                </div>
                <!-- end of image -->

                <!-- body -->
                <div class="petshop__content__card__body">
                    <!-- header -->
                    <header class="petshop__content__card__body__header">
                        <h3><?= $petshopUnit["title"]; ?></h3>
                    </header>
                    <!-- end of header -->

                    <p><?= $petshopUnit["description"]; ?></p>
                </div>
                <!-- end of body -->
            </article>
            <!-- end of card -->

            <?php endforeach; ?>

        </div>
        <!-- end of content -->
    </div>
</section>
<!-- end of petshop -->

<?php get_footer(); ?>