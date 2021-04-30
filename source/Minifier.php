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