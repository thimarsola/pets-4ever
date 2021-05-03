<?php get_header(); ?>

<!-- clinic -->
<section class="clinic">

    <!-- header -->
    <header class="pages__header">
        <div class="container">
            <h2><?= the_title() . " - " . SITE["name"] ?></h2>
            <p>Cuidado, Amor, Dedicação e Competência</p>
        </div>
    </header>
    <!-- end of header -->

    <!-- about -->
    <article class="clinic__about">
        <div class="container">

            <!-- row -->
            <div class="clinic__about__row">

                <!-- body -->
                <div class="clinic__about__row__body">
                    <!-- header -->
                    <header class="clinic__about__row__body__header">
                        <p>Seu amigo Pet em boas mãos</p>
                        <h3>Clínica Veterinária Pets 4Ever</h3>
                    </header>
                    <!-- end of header -->

                    <!-- content -->
                    <div class="clinic__about__row__body__content">
                        <p>Nossa médica veterinária é formada e especializada em Dermatologia. É apaixonada por pets e
                            trata todos com muito amor e carinho, trazendo uma experiência agradável para seu pet dentro
                            da clínica. Caso precise também realizamos atendimento em domicilio!</p>
                        <p>Agende já a consulta do seu peludo conosco.</p>
                    </div>
                    <!-- end of content -->

                    <a rel="nofollow"
                        href="<?= whatsapp(formatPhone(CONTACT["whatsapp"]), "Gostaria de agendar uma consulta!") ?>"
                        class="btn btn-yellow-500" target="_blank" title="Vamos agendar?">Agende uma consulta</a>
                </div>
                <!-- end of body -->


                <!-- image -->
                <div class="clinic__about__row__image">
                    <picture>
                        <source
                            srcset="<?= get_template_directory_uri(); ?>/assets/images/imagem-clinica-veterinaria.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/imagem-clinica-veterinaria.jpg"
                            alt="Clínica Veterinária <?= SITE['name']; ?>">
                    </picture>
                </div>
                <!-- end of image -->
            </div>
            <!-- end of row -->

        </div>
    </article>
    <!-- end of about -->

    <!-- specialties -->
    <article class="clinic__specialties">
        <div class="container">

            <!-- header -->
            <header class="clinic__specialties__header">
                <h3>Conheça nossas especialidades</h3>
            </header>
            <!-- end of header -->

            <!-- grid -->
            <div class="clinic__specialties__grid">

                <?php 
                    $specialties = file_get_contents(__DIR__ . "/includes/specialties.json");
                    $specialtiesList = json_decode($specialties, true);

                    foreach($specialtiesList['specialties'] as $specialty) :
                ?>

                <!-- card -->
                <article class="clinic__specialties__grid__card">
                    <!-- header -->
                    <header class="clinic__specialties__grid__card__header">

                        <picture>
                            <source
                                srcset="<?= get_template_directory_uri(); ?>/assets/images/especialidades-clinica-pets-4ever.webp"
                                type="image/webp">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/.png"
                                alt="Especialidades Clínica Veterinária <?= SITE['name']; ?>" loading="lazy">
                        </picture>

                        <h4><?= $specialty['name']; ?></h4>

                    </header>
                    <!-- end of header -->

                    <a rel="nofollow"
                        href="<?= whatsapp(formatPhone(CONTACT["whatsapp"]), "Gostaria de mais informações sobre a especialidade " . $specialty['name'] ."!") ?>"
                        class="btn btn-neutral-900" target="_blank" title="Tire já sua dúvidas">Saiba mais</a>
                </article>
                <!-- end of card -->

                <?php endforeach; ?>

            </div>
            <!-- end of grid -->

        </div>
    </article>
    <!-- end of specialties -->
</section>
<!-- end of clinic -->

<?php get_footer(); ?>