<?php

/**
 * DEVELOPER
 */
define("DEV", [
    "name" => "Goognet Solução Digital",
    "url" => "https://goognet.com.br"
]);

/**
 * SITE CONFIG
 */
define("SITE", [
    "name" => "Pets 4Ever Shop",
    "desc" => "Pets 4Ever nasceu do sonho de querer se dedicar e cuidar com todo amor e carinho do seu filho peludo.",
    "domain" => "pets4evershop.com.br",
    "locale" => "pt_BR",
    "lang" => "pt-BR",
    "keywords" => "Pets 4Ever, Banho e tosa, Daycare, Hotel para cães, Clínica Veterinária"
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . '/Minifier.php';
}

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "goognetsolucao",
    "facebook_author" => "goognetsolucao",
    "facebook_appId" => "112861974016840",
    "twitter_creator" => "@GoognetSolucao",
    "twitter_site" => "@GoognetSolucao"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "mail.pets4evershop.com.br",
    "port" => "587",
    "user" => "sender@pets4evershop.com.br",
    "passwd" => "Contato123*",
    "from_name" => "Pets 4Ever",
    "from_email" => "pets4everpetshop@gmail.com"
]);

/**
 * REGION
 */
define("REGION", [
    "region" => "BR-SP",
    "placename" => "S&atilde;o Paulo",
    "position" => "-23.600169;-46.681046",
    "icbm" => "-23.600169, -46.681046"
]);

/**
 * CONTACT
 */
define("CONTACT",[
    "whatsapp" => "(11) 97454-6990",
    "whatsappMessage" => "Olá Pets 4Ever, gostaria de maiores informações",
    "phone" => "(11) 3044-1340",
    "mail" => "pets4everpetshop@gmail.com",
    "address" => "Av. Dr. Cardoso de Melo, 985 - Vila Olímpia - São Paulo, SP",
    "addressLink" => "https://goo.gl/maps/j8bxPYUYNoL2LUhe9"
]);