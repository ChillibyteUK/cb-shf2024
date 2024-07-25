<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cb-shf2024
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<footer>
    <div class="container-xl pt-5">
        <div class="row g-4 pb-5">
            <div class="col-md-3">
                LOGO
            </div>
            <div class="col-md-3">
                <div class="menu-title">Services</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu_1')); ?>
            </div>
            <div class="col-md-3">
                <div class="menu-title">Guides</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu_2')); ?>
            </div>
            <div class="col-md-3">
                <div class="menu-title">Contact</div>
                <div class="pb-2">
                    <?=do_shortcode('[contact_phone]')?>
                </div>
                <div class="pb-3">
                    <?=do_shortcode('[contact_email]')?>
                </div>
                <div class="pb-2 socials">
                    <?=do_shortcode('[social_tw_icon]')?>
                    <?=do_shortcode('[social_in_icon]')?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl colophon pb-4">
        <div class="row g-4">
            <div class="col-md-6 order-2 order-md-1">
                &copy; <?=date('Y')?> SellHouseFast
            </div>
            <div class="col-md-6 order-1 order-md-2 d-flex align-items-center justify-content-md-end flex-wrap gap-1">
                <a href="/privacy-policy/">Privacy</a> &amp; <a href="/cookie-policy/">Cookie</a> Policy</a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>