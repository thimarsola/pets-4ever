<!doctype html>
<html lang="<?= SITE["lang"]; ?>">

<head>
    <meta charset="utf-8">
    <link rel="alternate" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" hreflang="x-default" />
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->

    <?php  if (!is_404()): ?>
    <title><?php echo(is_home()) ? SITE["name"] : the_title() . " - " . SITE["name"]; ?></title>
    <?php else: ?>
    <title><?= SITE["name"]; ?></title>
    <?php endif; ?>

    <base href="<?= get_site_url(); ?>">
    <meta name="description" content="<?= SITE["desc"]; ?>">
    <meta name="keywords" content="<?= SITE["keywords"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="geo.region" content="<?= REGION["region"]; ?>" />
    <meta name="geo.placename" content="<?= REGION["placename"]; ?>" />
    <meta name="geo.position" content="<?= REGION["position"]; ?>" />
    <meta name="ICBM" content="<?= REGION["icbm"]; ?>" />
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <link rel="canonical" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />
    <meta name="author" content="<?= SITE["name"]; ?> - <?= SITE["domain"]; ?>">
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon.png">
    <meta property="og:region" content="Brasil">
    <meta property="og:title" content="<?= SITE["name"] ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <meta property="og:description" content="<?= SITE["desc"]; ?>">
    <meta property="og:site_name" content="<?= SITE["name"] ?>">

    <?php wp_head(); ?>
</head>

<body id="home" <?php body_class(); ?>>
    <?php
    if (function_exists('custom_wp_body_open')) {
        wp_body_open();
    }
    ?>

    <h1 class="d-none"><?= SITE["name"]; ?></h1>

    <?php
        if(!is_404()):
    ?>

    <!--header-->
    <header class="header d-none">

        <!--navbar-->
        <div class="header__navbar">

            <!-- brand -->
            <a href="<?= get_home_url(); ?>" title="<?= SITE["name"]; ?>">
                <picture>
                    <source srcset="<?= get_template_directory_uri(); ?>/assets/images/logo-topo.webp"
                        type="image/webp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/logo-topo.png"
                        alt="Logo topo <?= SITE["name"]; ?>" loading="lazy">
                </picture>
            </a>

            <div class="header__navbar__section">
                <!-- toggle -->
                <div class="header__navbar__section__toggle">
                    <div class="header__navbar__section__toggle__bar"></div>
                    <div class="header__navbar__section__toggle__bar"></div>
                    <div class="header__navbar__section__toggle__bar"></div>
                </div>
                <!-- end of toggle -->

                <!-- container -->
                <div class="header__navbar__section__container">
                    <!-- nav -->
                    <nav class="header__navbar__section__container__nav">
                        <h2 class="d-none">Menu de Navegação</h2>
                        <?php
                            if(is_home()){
                                wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => '')); 
                            }else{
                                wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => '')); 
                            }
                        ?>
                    </nav>
                    <!-- end of nav -->
                </div>
                <!-- end of container -->
            </div>
        </div>
        <!--end of navbar-->
    </header>
    <!--end of header-->
    <?php endif ?>

    <!-- whatsapp -->
    <div class="whatsapp">
        <a rel="nofollow"
            href="https://api.whatsapp.com/send?phone=55<?= formatPhone(CONTACT["whatsapp"]); ?>&text=<?= urlencode(CONTACT["whatsappMessage"]); ?>"
            target="_blank" title="Vamos conversar?">
            <i class="pets-whatsapp"></i>
        </a>
    </div>
    <!-- end of whatsapp -->