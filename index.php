<?php get_header(); ?>

<!-- main -->
<main>

    <!-- hero -->
    <section class="hero">
        <div class="container">
            <!-- content -->
            <div class="hero__content">

                <!-- header -->
                <header class="hero__content__header">
                    <h2>Seu Pet <span>Hospedado</span> em <span>Família</span></h2>
                </header>
                <!-- end of header -->

                <p>Acreditamos que todos os pets são parte integrante das nossas famílias e merecem sim, serem tratados
                    como filhos! E assim como seres humanos, cada pet possui suas características específicas como
                    vigor, socialização e temperamento que devem ser respeitadas! Venha nos conhecer, traga seu pet para
                    uma avaliação! Temos certeza que vocês vão adorar! </p>

                <a rel="nofollow"
                    href="<?= whatsapp(formatPhone(CONTACT["whatsapp"]), "Gostaria de agendar uma visita!") ?>"
                    class="btn btn-yellow-500" target="_blank" title="Vamos agendar?">Agende uma visita</a>

            </div>
            <!-- end of content -->

            <!-- vector -->
            <div class="hero__vector">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/vetor-sol.svg"
                    alt="<?= SITE["name"]; ?> - Capa" loading="lazy">
            </div>
            <!-- end of vector -->

            <!-- image -->
            <div class="hero__image">
                <picture>
                    <source srcset="<?= get_template_directory_uri(); ?>/assets/images/capa.webp" type="image/webp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/capa.png"
                        alt="<?= SITE["name"]; ?> - Capa" loading="lazy">
                </picture>
            </div>
            <!-- end of image -->
        </div>
    </section>
    <!-- end of hero -->

    <!-- about -->
    <section class="about">
        <div class="container">

            <!-- row -->
            <div class="about__row">
                <!-- image -->
                <div class="about__row__image">
                    <picture>
                        <source srcset="<?= get_template_directory_uri(); ?>/assets/images/quem-somos.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/quem-somos.jpg"
                            alt="Atendendo seu peludo com estilo" loading="lazy">
                    </picture>
                </div>
                <!-- end of image -->

                <!-- content -->
                <div class="about__row__content">

                    <!-- header -->
                    <header class="about__row__content__header">
                        <h2>Bem-vindo a <b><?= SITE["name"]; ?></b></h2>
                        <p>Atendendo seu peludo com estilo</p>
                    </header>
                    <!-- end of header -->

                    <!-- text -->
                    <div class="about__row__content__text">
                        <p><b>Pets 4Ever</b> nasceu do sonho de querer se dedicar e cuidar com todo amor e carinho do
                            seu
                            filho peludo. Nossa família é amada por peludos há mais de 40 anos. Até hoje, já amamos doze
                            cachorros... Pastora Alemã, diversos SRD, Labradores, Shitzu e Goldens... sem contar os
                            demais
                            pets que já passaram por nossas vidas, como calopsitas, tartarugas, iguanas e chinchilas.
                            Acreditamos que são os nossos pets que nos ensinam realmente o que é amor, companheirismo e
                            lealdade. E foi pensando nisso que decidimos construir um espaço que visa o bem estar animal
                            trabalhando sempre com transparência, amor e dedicando todo nosso cuidado e tempo voltado
                            exclusivamente a eles!</p>

                        <a rel="nofollow"
                            href="<?= whatsapp(formatPhone(CONTACT["whatsapp"]), "Gostaria de agendar um horário para o meu pet!") ?>"
                            class="btn btn-yellow-500" target="_blank" title="Vamos conversar?">Fale conosco</a>
                    </div>
                    <!-- end of text -->

                </div>
                <!-- end of content -->
            </div>
            <!-- end of row -->

        </div>
    </section>
    <!-- end of about -->

    <!-- services -->
    <section class="services">
        <div class="container">

            <!-- header -->
            <header class="services__header">
                <h2>Serviços que oferecemos</h2>
                <p>Espaços com segurança e infraestrutura completa. Equipamentos modernos, comprometimento no horário e
                    total atenção na hora de cuidar do seu pet.</p>
            </header>
            <!-- end of header -->

            <!-- grid -->
            <div class="services__grid">

                <!-- card -->
                <article class="services__grid__card">

                    <!-- image -->
                    <div class="services__grid__card__image">
                        <picture>
                            <source srcset="<?= get_template_directory_uri(); ?>/assets/images/servico-petshop.webp"
                                type="image/webp">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/servico-petshop.jpg"
                                alt="Petshop - <?= SITE["name"]; ?>">
                        </picture>
                    </div>
                    <!-- end of image -->

                    <!-- header -->
                    <header class="services__grid__card__header">
                        <h3>Petshop</h3>
                    </header>
                    <!-- end of header -->

                    <!-- body -->
                    <div class="services__grid__card__body">
                        <p>Os melhores produtos para seu filho de quatro patinhas!</p>

                        <a href="<?= get_permalink(get_page_by_title('Petshop')); ?>" target="_blank">Saiba mais <i
                                class="pets-paw"></i></a>
                    </div>
                    <!-- end of body -->

                </article>
                <!-- end of card -->

                <!-- card -->
                <article class="services__grid__card">

                    <!-- image -->
                    <div class="services__grid__card__image">
                        <picture>
                            <source
                                srcset="<?= get_template_directory_uri(); ?>/assets/images/servico-banho-e-tosa.webp"
                                type="image/webp">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/servico-banho-e-tosa.jpg"
                                alt="Banho & Tosa - <?= SITE["name"]; ?>">
                        </picture>
                    </div>
                    <!-- end of image -->

                    <!-- header -->
                    <header class="services__grid__card__header">
                        <h3>Banho & Tosa</h3>
                    </header>
                    <!-- end of header -->

                    <!-- body -->
                    <div class="services__grid__card__body">
                        <p>Para seu pet ficar cheiroso, bonito e bem cuidado!</p>

                        <a href="<?= get_permalink(get_page_by_title('Banho & Tosa')); ?>" target="_blank">Saiba mais <i
                                class="pets-paw"></i></a>
                    </div>
                    <!-- end of body -->

                </article>
                <!-- end of card -->

                <!-- card -->
                <article class="services__grid__card">

                    <!-- image -->
                    <div class="services__grid__card__image">
                        <picture>
                            <source
                                srcset="<?= get_template_directory_uri(); ?>/assets/images/servico-clinica-veterinaria.webp"
                                type="image/webp">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/servico-clinica-veterinaria.jpg"
                                alt="Clínica Veterinária - <?= SITE["name"]; ?>">
                        </picture>
                    </div>
                    <!-- end of image -->

                    <!-- header -->
                    <header class="services__grid__card__header">
                        <h3>Clínica Veterinária</h3>
                    </header>
                    <!-- end of header -->

                    <!-- body -->
                    <div class="services__grid__card__body">
                        <p>Aqui cuidamos do seu pet com muito amor, dedicação e competência!</p>

                        <a href="<?= get_permalink(get_page_by_title('Clínica Veterinária')); ?>" target="_blank">Saiba
                            mais <i class="pets-paw"></i></a>
                    </div>
                    <!-- end of body -->

                </article>
                <!-- end of card -->

                <!-- card -->
                <article class="services__grid__card">

                    <!-- image -->
                    <div class="services__grid__card__image">
                        <picture>
                            <source
                                srcset="<?= get_template_directory_uri(); ?>/assets/images/servico-day-care-e-hotel.webp"
                                type="image/webp">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/servico-day-care-e-hotel.jpg"
                                alt="DayCare & Hotel - <?= SITE["name"]; ?>">
                        </picture>
                    </div>
                    <!-- end of image -->

                    <!-- header -->
                    <header class="services__grid__card__header">
                        <h3>DayCare & Hotel</h3>
                    </header>
                    <!-- end of header -->

                    <!-- body -->
                    <div class="services__grid__card__body">
                        <p>Seu pet hospedado em uma segunda casa com muito amor e carinho!</p>

                        <a href="<?= get_permalink(get_page_by_title('DayCare & Hotel')); ?>" target="_blank">Saiba mais
                            <i class="pets-paw"></i></a>
                    </div>
                    <!-- end of body -->

                </article>
                <!-- end of card -->

            </div>
            <!-- end of grid -->

        </div>
    </section>
    <!-- end of services -->

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

    <!-- reasons -->
    <section class="reasons">
        <div class="container">

            <!-- header -->
            <header class="reasons__header">
                <h2>Por que escolher a <b><?= SITE["name"]; ?></b>?</h2>
            </header>
            <!-- end of header -->

            <!-- grid -->
            <div class="reasons__grid">

                <!-- card -->
                <article class="reasons__grid__card">
                    <!-- number -->
                    <div class="reasons__grid__card__number">
                        <div class="reasons__grid__card__number__content">
                            <p>1</p>
                        </div>
                    </div>
                    <!-- end of number -->

                    <!-- content -->
                    <div class="reasons__grid__card__content">
                        <!-- header -->
                        <header class="reasons__grid__card__content__header">
                            <h3>Profissionais <span>Qualificados</span></h3>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="reasons__grid__card__content__body">
                            <p>Todos os nossos profissionais são treinados e certificados para atenderem o peludo do
                                jeito que ele merece: da melhor forma possível e sempre visando o bem-estar animal.</p>
                        </div>
                        <!-- end of body -->
                    </div>
                    <!-- end of content -->
                </article>
                <!-- end of card -->

                <!-- card -->
                <article class="reasons__grid__card">
                    <!-- number -->
                    <div class="reasons__grid__card__number">
                        <div class="reasons__grid__card__number__content">
                            <p>2</p>
                        </div>
                    </div>
                    <!-- end of number -->

                    <!-- content -->
                    <div class="reasons__grid__card__content">
                        <!-- header -->
                        <header class="reasons__grid__card__content__header">
                            <h3>Atendimento <span>Diferenciado</span></h3>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="reasons__grid__card__content__body">
                            <p>Tratamos todos sempre com transparência, respeito, carinho e amor. Nos consideramos uma
                                grande família e estamos sempre de prontidão para atende-los da melhor forma possível,
                                buscando sempre soluções para você e seu peludo. Vocês também podem fazer parte dessa
                                família!</p>
                        </div>
                        <!-- end of body -->
                    </div>
                    <!-- end of content -->
                </article>
                <!-- end of card -->

                <!-- card -->
                <div class="reasons__grid__card">
                    <picture>
                        <source srcset="<?= get_template_directory_uri(); ?>/assets/images/escolha-pets-4ever.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/escolha-pets-4ever.jpg"
                            alt="Motivos para você escolher a <?= SITE["name"]; ?>">
                    </picture>
                </div>
                <!-- end of card -->

                <!-- card -->
                <article class="reasons__grid__card">
                    <!-- number -->
                    <div class="reasons__grid__card__number">
                        <div class="reasons__grid__card__number__content">
                            <p>3</p>
                        </div>
                    </div>
                    <!-- end of number -->

                    <!-- content -->
                    <div class="reasons__grid__card__content">
                        <!-- header -->
                        <header class="reasons__grid__card__content__header">
                            <h3>Produtos de <span>Primeira linha</span></h3>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="reasons__grid__card__content__body">
                            <p>Trabalhamos apenas com produtos profissionais de primeira linha nos banhos, além de todos
                                os banhos serem feitos com cromoterapia que acalma o peludo, dando mais conforto na hora
                                do banho.</p>
                        </div>
                        <!-- end of body -->
                    </div>
                    <!-- end of content -->
                </article>
                <!-- end of card -->

                <!-- card -->
                <article class="reasons__grid__card">
                    <!-- number -->
                    <div class="reasons__grid__card__number">
                        <div class="reasons__grid__card__number__content">
                            <p>4</p>
                        </div>
                    </div>
                    <!-- end of number -->

                    <!-- content -->
                    <div class="reasons__grid__card__content">
                        <!-- header -->
                        <header class="reasons__grid__card__content__header">
                            <h3>Tudo o que você precisa em um <span>Único Lugar</span></h3>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="reasons__grid__card__content__body">
                            <p>Oferecemos todos os serviços que seu peludo precisa para estar sempre bem cuidado, feliz
                                e amado. Dessa forma os papais tem essa facilidade de precisarem se deslocar apenas a um
                                lugar para encontrar o que precisam: banho&tosa, daycare, hotel, clínica, loja e
                                transporte. Tudo em um só lugar!</p>
                        </div>
                        <!-- end of body -->
                    </div>
                    <!-- end of content -->
                </article>
                <!-- end of card -->

            </div>
            <!-- end of grid -->

        </div>
    </section>
    <!-- end of reasons -->

    <!-- cta -->
    <section class="cta">
        <div class="container">
            <!-- row -->
            <div class="cta__row">
                <!-- header -->
                <header class="cta__row__header">
                    <h2>Vamos agendar um horário?</h2>
                </header>
                <!-- end of header -->

                <a href="<?= whatsapp(formatPhone(CONTACT["whatsapp"]), "Eu quero agendar um horário para o meu PET!"); ?>"
                    class="btn btn-neutral-900" target="_blank" title="Vamos agendar?">Quero agendar</a>
            </div>
            <!-- end of row -->

        </div>
    </section>
    <!-- end of cta -->

    <!-- testimonial -->
    <section class="testimonial">
        <div class="container">

            <!-- header -->
            <header class="testimonial__header">
                <h2>Muito mais que nossos pets!</h2>
                <p>Nossos amigos verdadeiros</p>
            </header>
            <!-- end of header -->

            <!-- carousel -->
            <div class="testimonial__carousel owl-carousel">
                <?php
                    $testimonial = file_get_contents(__DIR__ . "/includes/testimonial.json");
                    $testimonialList = json_decode($testimonial, true);

                    foreach($testimonialList['testimonial'] as $testimony) :
                ?>
                <!-- item -->
                <div class="testimonial__carousel__item">

                    <picture>
                        <source
                            srcset="<?= get_template_directory_uri(); ?>/assets/images/<?= $testimony["image"]; ?>.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $testimony["image"]; ?>.jpg"
                            alt="Depoimentos - <?= SITE["name"]; ?>">
                    </picture>

                    <p><?= $testimony["description"]; ?></p>

                </div>
                <!-- end of item -->

                <?php endforeach; ?>
            </div>
            <!-- end of carousel -->

        </div>
    </section>
    <!-- end of testimonial -->

    <!-- map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.1411941576657!2d-46.685380385021425!3d-23.599268684664047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce574c3a60b38b%3A0xd08268913ea65b85!2sPets%204ever%20Pet%20Shop!5e0!3m2!1spt-BR!2sbr!4v1619181810168!5m2!1spt-BR!2sbr"
            allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- end of map -->

</main>
<!-- end of main -->


<?php get_footer(); ?>