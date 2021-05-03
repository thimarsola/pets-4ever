<?php get_header(); ?>

<!-- contact -->
<section class="contact">

    <!-- header -->
    <header class="pages__header">
        <div class="container">
            <h2><?= the_title() . " - " . SITE["name"] ?></h2>
            <p>Tire suas dúvidas a qualquer momento</p>
        </div>
    </header>
    <!-- end of header -->

    <div class="container">

        <!-- expedient -->
        <article class="contact__expedient">

            <!-- header -->
            <header class="contact__expedient__header">
                <h3>Horários de funcionamento</h3>
            </header>
            <!-- header -->

            <!-- content -->
            <div class="contact__expedient__content">
                <h4>PetShop, Banho & Tosa:</h4>
                <p>Seg a Sexta das 8h as 18h, sábado das 9h as 16h</p>
            </div>
            <!-- content -->

            <!-- content -->
            <div class="contact__expedient__content">
                <h4>Clínica Veterinária</h4>
                <p>Seg a Sexta das 10h as 18h, sábado das 10h as 15h</p>
            </div>
            <!-- content -->

            <!-- content -->
            <div class="contact__expedient__content">
                <h4>DayCare & Hotel:</h4>
                <p>Seg a Sexta das 8h as 20h, sábado das 9h as 16h</p>
                <p>Domingos e feriados hotel interno apenas, fechado ao público</p>
            </div>
            <!-- content -->

        </article>
        <!-- end of expedient -->

        <!-- phones -->
        <article class="contact__phones">

            <!-- header -->
            <header class="contact__phones__header">
                <h3>Telefones</h3>
            </header>
            <!-- end of header -->

            <a rel="nofollow" href="tel:<?= formatPhone(CONTACT["phone"]); ?>" target="_blank"
                title="Ligue já para a <?= SITE["name"]; ?>">
                <?= CONTACT["phone"]; ?>
            </a>
            <br>
            <a rel="nofollow"
                href="<?= whatsapp(formatPhone(CONTACT["whatsapp"]), "Gostaria de agendar uma horário para o meu Pet!"); ?>"
                target="_blank" title="Vamos conversar pelo whatsapp?">
                <?= CONTACT["whatsapp"]; ?>
            </a>
        </article>
        <!-- end of phones -->

        <!-- mail -->
        <article class="contact__mail">

            <!-- header -->
            <header class="contact__mail__header">
                <h3>E-mail</h3>
            </header>
            <!-- end of header -->

            <address>
                <a rel="nofollow" href="mailto:<?= CONTACT["mail"]; ?>" target="_blank"
                    title="Mande um e-mail para a <?= SITE["name"]; ?>">
                    <?= CONTACT["mail"]; ?>
                </a>
            </address>
        </article>
        <!-- end of mail -->

        <!-- address -->
        <article class="contact__address">

            <!-- header -->
            <header class="contact__address__header">
                <h3>Endereço</h3>
            </header>
            <!-- end of header -->

            <address>
                <a rel="nofollow" href="<?= CONTACT["addressLink"]; ?>" target="_blank"
                    title="Venha conhecer a <?= SITE["name"]; ?>">
                    <?= CONTACT["address"]; ?>
                </a>
            </address>
        </article>
        <!-- end of address -->

        <!-- map -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.1411941576657!2d-46.685380385021425!3d-23.599268684664047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce574c3a60b38b%3A0xd08268913ea65b85!2sPets%204ever%20Pet%20Shop!5e0!3m2!1spt-BR!2sbr!4v1619181810168!5m2!1spt-BR!2sbr"
                allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- end of map -->
    </div>

</section>
<!-- end of contact -->

<?php get_footer(); ?>