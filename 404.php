<?php get_header(); ?>

<main>
    <!-- image -->
    <div class="image">
        <a href="<?= get_home_url(); ?>" title="<?= SITE["name"]; ?>">
            <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/assets/images/logo-topo.webp" type="image/webp">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/logo-topo.png"
                    alt="Logo topo <?= SITE["name"]; ?>" loading="lazy">
            </picture>
    </div>
    <!-- end of image -->


    <!-- error -->
    <div class="error">
        <div class="container">
            <!-- header -->
            <header class="error__header">
                <h2>Oops!</h2>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="error__content">
                <p>Parece que não conseguimos encontrar a página que você está procurando.</p>
            </div>
            <!-- end of content -->

            <!-- button -->
            <div class="error__button">
                <a href="<?= get_home_url(); ?>" class="btn btn-neutral-900" target="_blank" title="Voltar">Voltar</a>
            </div>
            <!-- end of button -->
        </div>
    </div>
    <!-- end of error -->

</main>

<?php get_footer('error'); ?>