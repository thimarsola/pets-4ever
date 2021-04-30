<?php get_header(); ?>

<!-- bath -->
<section class="bath">

    <!-- header -->
    <header class="pages__header">
        <div class="container">
            <h2><?= the_title() . " - " . SITE["name"] ?></h2>
            <p>Cuidando bem do seu melhor amigo</p>
        </div>
    </header>
    <!-- end of header -->

    <div class="container">
        <!-- center -->
        <section class="bath__center">

            <!-- row -->
            <div class="bath__center__row">

                <!-- body -->
                <div class="bath__center__row__body">

                    <!-- header -->
                    <header class="bath__center__row__body__header">
                        <p>Cuidando bem do seu filho de quatro patas</p>
                        <h3>Centro Estético Pets 4Ever</h3>
                    </header>
                    <!-- end of header -->

                    <!-- content -->
                    <div class="bath__center__row__body__content">
                        <p>O nosso centro estético conta com profissionais treinados e qualificados para oferecer o
                            melhor banho e tosa para o seu peludo, seguindo padrões de cada raça. Nossos banhos são com
                            cromoterapia e água purificada sem cloro, flúor e toxinas, deixando seu peludo mais calmo e
                            uma pele e pelo mais macios e saudáveis. Além disso os produtos utilizados são profissionais
                            de primeira linha, hipoalergênicos e biodegradáveis. </p>

                        <a rel="nofollow"
                            href="<?= whatsapp(formatPhone(CONTACT["whatsapp"]), "Gostaria de agendar um horário!") ?>"
                            class="btn btn-yellow-500" target="_blank" title="Vamos agendar?">Agende um horário</a>
                    </div>
                    <!-- end of content -->

                </div>
                <!-- end of body -->

                <!-- image -->
                <div class="bath__center__row__image">
                    <picture>
                        <source
                            srcset="<?= get_template_directory_uri(); ?>/assets/images/centro-estetico-pets-4ever.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/centro-estetico-pets-4ever.jpg"
                            alt="Centro Estético Pets 4Ever" loading="lazy">
                    </picture>
                </div>
                <!-- end of image -->

            </div>
            <!-- end of row -->

        </section>
        <!-- end of center -->

        <!-- bath -->
        <section class="bath__bath">
            <!-- row -->
            <div class="bath__bath__row">
                <!-- image -->
                <div class="bath__bath__row__image">
                    <picture>
                        <source srcset="<?= get_template_directory_uri(); ?>/assets/images/melhor-banho.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/melhor-banho.jpg"
                            alt="O melhor banho e tosa de São Paulo" loading="lazy">
                    </picture>
                </div>
                <!-- end of image -->

                <!-- body -->
                <div class="bath__bath__row__body">
                    <!-- header -->
                    <header class="bath__bath__row__body__header">
                        <h3>O melhor Banho & Tosa</h3>
                    </header>
                    <!-- end of header -->

                    <p>Aqui no <b>Pets 4Ever</b> há vários tipos de serviços que são oferecidos de acordo com a
                        necessidade do seu peludo, como:</p>

                    <ul>
                        <li>Banho para cães e gatos</li>
                        <li>Corte de unha</li>
                        <li>Escovação de dente</li>
                        <li>Tosa higiênica</li>
                        <li>Tosa na tesoura</li>
                        <li>Tosa na máquina</li>
                        <li>Tosa da raça</li>
                        <li>Hidratação</li>
                        <li>Remoção de subpelo</li>
                        <li>Máquina de secagem</li>
                        <li>Cromoterapia</li>
                        <li>Penteados</li>
                    </ul>
                </div>
                <!-- end of body -->
            </div>
            <!-- end of row -->
        </section>
        <!-- end of bath -->
    </div>
</section>
<!-- end of bath -->

<!-- gallery -->
<div class="gallery">
    <div class="container">
        <div class="gallery__carousel owl-carousel">
            <?php
                for($img=1; $img < 7; $img++){
            ?>
            <!-- item -->
            <div class="gallery__carousel__item">

                <picture>
                    <source srcset="<?= get_template_directory_uri(); ?>/assets/images/banho-e-tosa-0<?= $img; ?>.webp"
                        type="image/webp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/banho-e-tosa-0<?= $img; ?>.jpg"
                        alt="Banho e Tosa <?= SITE['name']; ?>" loading="lazy">
                </picture>

            </div>
            <!-- end of item -->
            <?php
                }
            ?>
        </div>
    </div>
</div>
<!-- end of gallery -->

<!-- take and bring service -->
<section class="taxi bg-gray-100">
    <div class="container">

        <!-- row -->
        <div class="taxi__row">

            <!-- content -->
            <div class="taxi__row__content">

                <!-- header -->
                <header class="taxi__row__content__header">
                    <h2>Serviço de Leva & Traz</h2>
                </header>
                <!-- end of header -->

                <!-- text -->
                <div class="taxi__row__content__text">
                    <p>O serviço de leva e traz da Pets 4Ever transporta cães e gatos com toda a segurança
                        necessária! Seja para o nosso DayCare, Banho & Tosa ou para ficar hospedado conosco, seu pet
                        tem transporte de qualidade garantido!</p>

                    <a href="<?= whatsapp(formatPhone(CONTACT["whatsapp"]), "Quero agendar um horário para o meu PET!") ?>"
                        class="btn btn-yellow-500" target="_blank" title="Vamos conversar?">Fale conosco</a>
                </div>
                <!-- end of text -->

            </div>
            <!-- end of content -->

            <!-- image -->
            <div class="taxi__row__image">
                <picture>
                    <source srcset="<?= get_template_directory_uri(); ?>/assets/images/servico-leva-e-traz.webp"
                        type="image/webp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/servico-leva-e-traz.png"
                        alt="Serviço Leva & Traz - <?= SITE["name"]; ?>" loading="lazy">
                </picture>
            </div>
            <!-- end of image -->

        </div>
        <!-- end of row -->

    </div>
</section>
<!-- end of take and bring service -->

<?php get_footer(); ?>