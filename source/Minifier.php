<?php

/**
 * CSS
 */
$homeCss = new MatthiasMullie\Minify\CSS();
$homeCss->add(dirname(__DIR__, 1) . "/assets/css/style.css");
$homeCss->minify(dirname(__DIR__, 1) . "/assets/css/style.min.css");

$petshopCss = new MatthiasMullie\Minify\CSS();
$petshopCss->add(dirname(__DIR__, 1) . "/assets/css/style-petshop.css");
$petshopCss->minify(dirname(__DIR__, 1) . "/assets/css/style-petshop.min.css");

$banhoTosaCss = new MatthiasMullie\Minify\CSS();
$banhoTosaCss->add(dirname(__DIR__, 1) . "/assets/css/style-banho-e-tosa.css");
$banhoTosaCss->minify(dirname(__DIR__, 1) . "/assets/css/style-banho-e-tosa.min.css");

$daycareHotelCss = new MatthiasMullie\Minify\CSS();
$daycareHotelCss->add(dirname(__DIR__, 1) . "/assets/css/style-daycare-e-hotel.css");
$daycareHotelCss->minify(dirname(__DIR__, 1) . "/assets/css/style-daycare-e-hotel.min.css");

$veterinaryClinicCss = new MatthiasMullie\Minify\CSS();
$veterinaryClinicCss->add(dirname(__DIR__, 1) . "/assets/css/style-clinica-veterinaria.css");
$veterinaryClinicCss->minify(dirname(__DIR__, 1) . "/assets/css/style-clinica-veterinaria.min.css");

$tipsCss = new MatthiasMullie\Minify\CSS();
$tipsCss->add(dirname(__DIR__, 1) . "/assets/css/style-dicas.css");
$tipsCss->minify(dirname(__DIR__, 1) . "/assets/css/style-dicas.min.css");

$contactCss = new MatthiasMullie\Minify\CSS();
$contactCss->add(dirname(__DIR__, 1) . "/assets/css/style-contato.css");
$contactCss->minify(dirname(__DIR__, 1) . "/assets/css/style-contato.min.css");

$errorCss = new MatthiasMullie\Minify\CSS();
$errorCss->add(dirname(__DIR__, 1) . "/assets/css/style-error.css");
$errorCss->minify(dirname(__DIR__, 1) . "/assets/css/style-error.min.css");


/**
 * js
 */
$homeJs = new MatthiasMullie\Minify\JS();
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/owl.carousel.min.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/carousel.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/gsap.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/ScrollTrigger.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/animation.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/animation.js");
$homeJs->minify(dirname(__DIR__, 1) . "/assets/js/script-home.min.js");

$petshopJs = new MatthiasMullie\Minify\JS();
$petshopJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$petshopJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/scroll.js");
$petshopJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$petshopJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/gsap.js");
$petshopJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/ScrollTrigger.js");
$petshopJs->add(dirname(__DIR__, 1) . "/assets/js/theme/animation.js");
$petshopJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/animation.js");
$petshopJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/petshop/animation.js");
$petshopJs->minify(dirname(__DIR__, 1) . "/assets/js/script-petshop.min.js");

$banhoTosaJs = new MatthiasMullie\Minify\JS();
$banhoTosaJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$banhoTosaJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/scroll.js");
$banhoTosaJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$banhoTosaJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/owl.carousel.min.js");
$banhoTosaJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/banho-e-tosa/carousel.js");
$banhoTosaJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/gsap.js");
$banhoTosaJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/ScrollTrigger.js");
$banhoTosaJs->add(dirname(__DIR__, 1) . "/assets/js/theme/animation.js");
$banhoTosaJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/animation.js");
$banhoTosaJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/banho-e-tosa/animation.js");
$banhoTosaJs->minify(dirname(__DIR__, 1) . "/assets/js/script-banho-e-tosa.min.js");

$daycareHotelJs = new MatthiasMullie\Minify\JS();
$daycareHotelJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$daycareHotelJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/scroll.js");
$daycareHotelJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$daycareHotelJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/gsap.js");
$daycareHotelJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/ScrollTrigger.js");
$daycareHotelJs->add(dirname(__DIR__, 1) . "/assets/js/theme/animation.js");
$daycareHotelJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/animation.js");
$daycareHotelJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/daycare-e-hotel/animation.js");
$daycareHotelJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.magnific-popup.js");
$daycareHotelJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/daycare-e-hotel/gallery.js");
$daycareHotelJs->minify(dirname(__DIR__, 1) . "/assets/js/script-daycare-e-hotel.min.js");

$veterinaryClinicJs = new MatthiasMullie\Minify\JS();
$veterinaryClinicJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$veterinaryClinicJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/scroll.js");
$veterinaryClinicJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$veterinaryClinicJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/gsap.js");
$veterinaryClinicJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/ScrollTrigger.js");
$veterinaryClinicJs->add(dirname(__DIR__, 1) . "/assets/js/theme/animation.js");
$veterinaryClinicJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/animation.js");
$veterinaryClinicJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/clinica-veterinaria/animation.js");
$veterinaryClinicJs->minify(dirname(__DIR__, 1) . "/assets/js/script-clinica-veterinaria.min.js");

$tipsJs = new MatthiasMullie\Minify\JS();
$tipsJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$tipsJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/scroll.js");
$tipsJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$tipsJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/gsap.js");
$tipsJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/ScrollTrigger.js");
$tipsJs->add(dirname(__DIR__, 1) . "/assets/js/theme/animation.js");
$tipsJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/animation.js");
$tipsJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/dicas/animation.js");
$tipsJs->minify(dirname(__DIR__, 1) . "/assets/js/script-dicas.min.js");

$contactJs = new MatthiasMullie\Minify\JS();
$contactJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$contactJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/scroll.js");
$contactJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$contactJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/gsap.js");
$contactJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/ScrollTrigger.js");
$contactJs->add(dirname(__DIR__, 1) . "/assets/js/theme/animation.js");
$contactJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/animation.js");
$contactJs->add(dirname(__DIR__, 1) . "/assets/js/theme/pages/contato/animation.js");
$contactJs->minify(dirname(__DIR__, 1) . "/assets/js/script-contato.min.js");