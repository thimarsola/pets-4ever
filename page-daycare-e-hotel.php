<?php get_header(); ?>

<!-- hotel -->
<section class="hotel">

    <!-- header -->
    <header class="pages__header">
        <div class="container">
            <h2><?= the_title() . " - " . SITE["name"] ?></h2>
            <p>Seu Pet hospedado em uma segunda casa!</p>
        </div>
    </header>
    <!-- end of header -->

    <!-- about -->
    <article class="hotel__about">
        <div class="container">
            <!-- row -->
            <div class="hotel__about__row">
                <!-- content -->
                <div class="hotel__about__row__content">
                    <!-- header -->
                    <header class="hotel__about__row__content__header">
                        <p>Aqui seu pet vai se sentir em casa!</p>
                        <h3>Creche para seu Pet</h3>
                    </header>
                    <!-- header -->

                    <!-- text -->
                    <div class="hotel__about__row__content__text">
                        <p>O Pets 4Ever oferece tudo o que seu filho peludo precisa durante seus compromissos e/ou
                            férias.
                            Aqui os peludos andam juntos e misturados, sempre soltos e com muitas atividades, tanto
                            recreativas, para gastar a energia dessa criançada, como cognitivas, estimulando o
                            raciocínio e
                            os sentidos dos peludinhos.</p>
                        <br>
                        <p>Contamos com espaços abertos e fechados para correr, brincar, tomar sol, piscininha,
                            cachoeira,
                            escorregador, um super túnel, brinquedão e até um banquinho para o momento relax. Tudo isso
                            regado com muito amor e carinho dos membros da nossa equipe. E no fim do dia seu peludo toma
                            um
                            banho à seco para voltar cheirosinho para você, quando necessário.</p>
                        <br>
                        <p>É imprescindível que a carteirinha de vacinação de seu peludo esteja sempre atualizada, assim
                            como os exames periódicos de coproparasitológico e solorologia de giárdia (ELISA), que
                            pedimos
                            quando o peludo começa a frequentar nosso espaço e a cada 6 meses. Caso alguma vacina esteja
                            atrasada, o ideal é que seja aplicada pelo menos 15 dias antes do peludo começar a vir para
                            que
                            ocorra a soro conversão. Por isso enfatizamos a importância de planejar com antecipação a
                            hospedagem e/ou divertimento do seu peludo. O cãozinho também deverá estar vermifugado e
                            protegido contra ectoparasitas, como pulgas e carrapatos, sempre em dia, conforme a
                            orientação
                            do veterinário. Caso necessite do produto você pode obtê-lo em nossa farmacinha e nós mesmo
                            aplicamos em seu pet.</p>
                        <br>
                        <p>Não perca tempo e Agende um horário para conhecer o nosso espaço e garantir a vaga do seu
                            filhote!</p>
                    </div>
                    <!-- end of text -->

                    <a rel="nofollow"
                        href="<?= whatsapp(formatPhone(CONTACT["whatsapp"]), "Gostaria de agendar uma visita!") ?>"
                        class="btn btn-yellow-500" target="_blank" title="Vamos agendar?">Agende uma visita</a>
                </div>
                <!-- end of content -->

                <!-- image -->
                <div class="hotel__about__row__image">
                    <picture>
                        <source srcset="<?= get_template_directory_uri(); ?>/assets/images/daycare-e-hotel.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/daycare-e-hotel.jpg"
                            alt="DayCare & Hotel Pets 4Ever" loading="lazy">
                    </picture>
                </div>
                <!-- end of image -->
            </div>
            <!-- end of row -->
        </div>
    </article>
    <!-- end of about -->

    <!-- gallery -->
    <article class="hotel__gallery">
        <div class="container">

            <!-- header -->
            <header class="hotel__gallery__header">
                <h3>Conheça o nosso espaço</h3>
            </header>
            <!-- end of header -->


            <!-- content -->
            <div class="hotel__gallery__content">
                <?php
                    for($img=1; $img < 7; $img++){
                ?>

                <a href="<?= get_template_directory_uri(); ?>/assets/images/galeria-pet-4ever-0<?= $img; ?>.jpg"
                    class="hotel__gallery__content__image">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/galeria-pet-4ever-0<?= $img; ?>.jpg"
                        alt="Galeria DayCare e Hotel Pets 4Ever" loading="lazy">
                </a>

                <?php
                    }
                ?>
            </div>
            <!-- end of content -->
        </div>
    </article>
    <!-- end of gallery -->
</section>
<!-- end of hotel -->

<?php get_footer(); ?>