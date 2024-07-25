<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cb-shf2024
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
        href="<?=get_stylesheet_directory_uri()?>/fonts/jost-v15-latin-300.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">

    <?php
    if (get_field('gtm_property', 'options')) {
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


if (is_front_page() || is_page('contact-us')) {
    ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "SellHouseFast",
            "legalName": "Jolack Limited",
            "url": "https://www.sellhousefast.co.uk/",
            "logo": "https://www.sellhousefast.co.uk/wp-content/themes/cb-shf2024/img/shf-logo-large.png",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Haslers, Old Station Road",
                "addressLocality": "London",
                "postalCode": "IG10 4PL",
                "addressCountry": "United Kingdom"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "customer support",
                "telephone": "[+44 (0) 800 123 4567]",
                "email": "info@sellhousefast.co.uk"
            },
            "sameAs": [
                "https://twitter.com/",
                "https://www.linkedin.com/company/"
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
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
            src="https://www.googletagmanager.com/ns.html?id=<?=get_field('ga_property', 'options')?>"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
}
?>
    <header>
        <nav id="navbar" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">
            <div class="container-xl pt-4 pb-3">
                <a href="/"><img
                        src="<?=get_stylesheet_directory_uri()?>/img/shf-logo--dark.svg"
                        width=224 height=84 alt="SellHouseFast"></a>
                <button class="navbar-toggler input-button" id="navToggle" data-bs-toggle="collapse"
                    data-bs-target=".navbars" type="button" aria-label="Navigation"><i
                        class="fa fa-navicon"></i></button>
                <?php
wp_nav_menu(
    array(
        'theme_location'  => 'primary_nav',
        'container_class' => 'collapse navbar-collapse navbars',
        'container_id'    => 'primaryNav',
        'menu_class'      => 'navbar-nav w-100 justify-content-end gap-lg-4',
        'menu_id'         => 'main-menu',
        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
    )
);
?>
            </div>
        </nav>

    </header>