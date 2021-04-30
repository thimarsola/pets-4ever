<?php 
    if(is_page()):
?>

<!-- cta -->
<section class="cta cta__pages">
    <div class="container">
        <!-- row -->
        <div class="cta__row">
            <!-- header -->
            <header class="cta__row__header">
                <h2>Gostaria de maiores informações?</h2>
            </header>
            <!-- end of header -->

            <a href="<?= whatsapp(formatPhone(CONTACT["whatsapp"]), "Eu gostaria de mais informações sobre o " . get_the_title()); ?>"
                class="btn btn-neutral-900" target="_blank" title="Vamos conversar?">Fale conosco</a>
        </div>
        <!-- end of row -->

    </div>
</section>
<!-- end of cta -->
<?php endif ?>

</main>
<!-- end of main -->

<!-- footer -->
<footer class="footer">
    <div class="container">
        <!-- information -->
        <div class="footer__information">

            <!-- about -->
            <div class="footer__information__about">
                <picture>
                    <source srcset="<?= get_template_directory_uri(); ?>/assets/images/logo-rodape.webp"
                        type="image/webp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/logo-rodape.jpg"
                        alt="Logo rodape <?= SITE["name"]; ?>">
                </picture>

                <p>Pets 4Ever nasceu do sonho de querer se dedicar e cuidar com todo amor e carinho do seu filho peludo.
                </p>

                <!-- list -->
                <ul class="footer__information__about__list">
                    <li>
                        <a rel="nofollow" href="https://www.facebook.com/pets4everpetshop"
                            title="Visite nossa página no Facebook" target="_blank"><i class="pets-facebook"></i></a>
                    </li>
                    <li>
                        <a rel="nofollow" href="https://www.instagram.com/pets4everpetshop/"
                            title="Visite nossa página no Instagram" target="_blank"><i class="pets-instagram"></i></a>
                    </li>
                </ul>
                <!-- end of list -->
            </div>
            <!-- end of about -->

            <!-- contact -->
            <section class="footer__information__contact">

                <!-- header -->
                <div class="footer__information__contact__header">
                    <h2>Informações para contato</h2>
                </div>
                <!-- end of header -->

                <!-- list -->
                <ul class="footer__information__contact__list">
                    <li>
                        <address>
                            <a rel="nofollow" href="<?= CONTACT["addressLink"]; ?>" target="_blank"
                                title="Venha conhecer a <?= SITE["name"]; ?>">
                                <i class="pets-target"></i>
                                <?= CONTACT["address"]; ?>
                            </a>
                        </address>
                    </li>

                    <li>
                        <a rel="nofollow" href="tel:<?= formatPhone(CONTACT["phone"]); ?>" target="_blank"
                            title="Ligue já para a <?= SITE["name"]; ?>">
                            <i class="pets-phone"></i>
                            <?= CONTACT["phone"]; ?>
                        </a>
                    </li>

                    <li>
                        <a rel="nofollow"
                            href="<?= whatsapp(formatPhone(CONTACT["whatsapp"]), "Gostaria de agendar uma horário para o meu Pet!"); ?>"
                            target="_blank" title="Vamos conversar pelo whatsapp?">
                            <i class="pets-whatsapp"></i>
                            <?= CONTACT["whatsapp"]; ?>
                        </a>
                    </li>

                    <li>
                        <address>
                            <a rel="nofollow" href="mailto:<?= CONTACT["mail"]; ?>" target="_blank"
                                title="Mande um e-mail para a <?= SITE["name"]; ?>">
                                <i class="pets-mail"></i>
                                <?= CONTACT["mail"]; ?>
                            </a>
                        </address>
                    </li>
                </ul>
                <!-- end of list -->

            </section>
            <!-- end of contact -->

            <!-- expedient -->
            <section class="footer__information__expedient">

                <!-- header -->
                <div class="footer__information__expedient__header">
                    <h2>Horários de funcionamento</h2>
                </div>
                <!-- header -->

                <!-- content -->
                <article class="footer__information__expedient__content">
                    <h3>PetShop, Banho & Tosa:</h3>
                    <p>Seg a Sexta das 8h as 18h, sábado das 9h as 16h</p>
                </article>
                <!-- content -->

                <!-- content -->
                <article class="footer__information__expedient__content">
                    <h3>Clínica Veterinária</h3>
                    <p>Seg a Sexta das 10h as 18h, sábado das 10h as 15h</p>
                </article>
                <!-- content -->

                <!-- content -->
                <article class="footer__information__expedient__content">
                    <h3>DayCare & Hotel:</h3>
                    <p>Seg a Sexta das 8h as 20h, sábado das 9h as 16h</p>
                    <p>Domingos e feriados hotel interno apenas, fechado ao público</p>
                </article>
                <!-- content -->

            </section>
            <!-- end of expedient -->

        </div>
        <!-- end of information -->
    </div>

    <!-- copyright -->
    <div class="footer__copyright bg-gray-200">
        <div class="container">
            <p>&COPY; <?= date('Y'); ?> <?= SITE['name'] ?> | Todos os direitos reservados</p>
        </div>
    </div>
    <!-- end of copyright -->

    <!-- developer -->
    <div class="footer__developer bg-yellow-500">
        <div class="container">

            <!-- row -->
            <div class="footer__developer__row">
                <!-- goognet -->
                <div class="footer__developer__row__goognet">
                    <p>Desenvolvido por
                        <b>
                            <a rel="nofollow" href="<?= DEV["url"]; ?>" target="_blank"
                                title="Agência Especializada em Marketing Digital"><?= DEV["name"]; ?></a>
                        </b>
                    </p>
                </div>
                <!-- end of goognet -->

                <!-- validator -->
                <div class="footer__developer__row__validator">
                    <?php
                        $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

                        if (is_home()) {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
                        } else {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
                        }
                    ?>

                    <a rel="nofollow"
                        href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F"
                        target="_blank" title="Tecnologia W3C">
                        <i class="pets-w3c-validator"></i>
                        W3C Validator
                    </a>
                </div>
                <!-- end of validator -->
            </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of developer -->
</footer>
<!-- end of footer -->

<?php wp_footer(); ?>

</body>

</html>