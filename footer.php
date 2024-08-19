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
            <div class="col-sm-6 col-md-3 text-center">
                <img class="footer__logo mb-4" src="<?=get_stylesheet_directory_uri()?>/img/shf-logo--light.svg" alt="">
                <div class="mb-4">Call us today on<br><strong><?=do_shortcode('[contact_phone]')?></strong></div>
                <?=social_icons()?>
            </div>
            <div class="col-sm-6 col-md-3 footer__border">
                <div class="menu-title">Services</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu_1')); ?>
            </div>
            <div class="col-sm-6 col-md-3 footer__border">
                <div class="menu-title">Selling Guides</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu_2')); ?>
            </div>
            <div class="col-sm-6 col-md-3 footer__border">
                <div class="menu-title">About Us</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu_3')); ?>
            </div>
        </div>
    </div>
    <div class="container-xl colophon pb-4">
        <div class="row g-4">
            <div class="col-md-6 order-2 order-md-1">
                &copy; <?=date('Y')?> SellHouseFast | Sell House Fast is a trading style of Jolack Limited Registered in England, no. 15683659.<br>
                Registered address: Office 1.01, 411 - 413 Oxford Street, London, England, W1C 2PE
            </div>
            <div class="col-md-6 order-1 order-md-2 d-flex align-items-center justify-content-md-end flex-wrap gap-1">
                <a href="/privacy-policy/">Privacy</a> &amp; <a href="/cookie-policy/">Cookie</a> Policy</a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script>(function(n,t,i,r){var u,f;n[i]=n[i]||{},n[i].initial={accountCode:"CHILL11133",host:"CHILL11133.pcapredict.com"},n[i].on=n[i].on||function(){(n[i].onq=n[i].onq||[]).push(arguments)},u=t.createElement("script"),u.async=!0,u.src=r,f=t.getElementsByTagName("script")[0],f.parentNode.insertBefore(u,f)})(window,document,"pca","//CHILL11133.pcapredict.com/js/sensor.js")</script>
</body>
</html>