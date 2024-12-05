<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Timetobeme2024
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/playfair-display-v37-latin-600.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/playfair-display-v37-latin-regular.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/montserrat-v26-latin-regular.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/montserrat-v26-latin-600.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">

    <?php
    if (get_field('gtm_property', 'options')) {
        if (!is_user_logged_in()) {
        ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
        );
    </script>
    <!-- End Google Tag Manager -->
    <?php
        }
    }


if (is_front_page() || is_page('contact-us')) {
    ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "TIME to be ME",
            "url": "https://timetobeme.co.uk/",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Pages Court, The High Street",
                "addressLocality": "Petersfield",
                "postalCode": "GU32 3HX",
                "addressCountry": "United Kingdom"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "customer support",
                "telephone": "[+44 (0) 1730 260260]",
                "email": "info@timetobeme.co.uk"
            },
            "sameAs": [
                "https://x.com/TIMEtobeME1",
                "https://www.facebook.com/timetobemesalon",
                "https://www.instagram.com/timetobemepetersfield/",
                "https://www.youtube.com/channel/UChfvYejAmYARttmGCRINj8A/"
            ]
        }
    </script>
    <?php
}
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
do_action('wp_body_open');

if (get_field('gtm_property', 'options')) {
    if (!is_user_logged_in()) {
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
            src="https://www.googletagmanager.com/ns.html?id=<?=get_field('ga_property', 'options')?>"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
    }
}
?>
<?
if (!is_user_logged_in()) {
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FCSFRCTZ91"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-FCSFRCTZ91');
</script>
<?
}
?>
    <header>
        <div class="container text-center py-2" id="topbar">
            <div class="row justify-content-md-center">
                <div class="col-xl-3 col-lg-4 text-center text-white">
                    <i class="fa-solid fa-phone me-2"></i> <?=do_shortcode('[contact_phone]')?>
                </div>
                <div class="col-xl-3 col-lg-4 text-center text-white">
                    <i class="fa-regular fa-envelope me-2"></i> <?=do_shortcode('[contact_email]')?>
                </div>
                <div class="col-xl-3 col-lg-4 text-center text-white">
                    <i class="fa-regular fa-calendar me-2"></i> <a href="https://www.phorest.com/salon/timetobeme" target="_blank">Book Online</a>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center py-2" id="navcontainer">
            <nav id="navbar" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">
                <div class="container-xl py-2">
                    <button class="header_toggle navbar-toggler input-button" id="navToggle" data-bs-toggle="collapse"
                        data-bs-target=".navbars" type="button" aria-label="Navigation"><i
                            class="fa fa-navicon"></i></button>
                    <?php
    wp_nav_menu(
        array(
            'theme_location'  => 'primary_nav',
            'container_class' => 'header_nav collapse navbar-collapse navbars',
            'container_id'    => 'primaryNav',
            'menu_class'      => 'navbar-nav w-100 justify-content-center gap-lg-3 ps-lg-4 text-uppercase text-start',
            'menu_id'         => 'main-menu',
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
        )
    );
    ?>
                </div>
            </nav>
        </div>

    </header>