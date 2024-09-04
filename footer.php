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
<script src="https://cdn.jsdelivr.net/npm/@ideal-postcodes/address-finder-bundled@4"></script>
<script>
  IdealPostcodes.AddressFinder.setup({
    apiKey: "ak_test",
    outputFields: {
      line_1: "#haddr1",
      line_2: "#haddr2",
      line_3: "#haddr3",
      post_town: "#htown",
      postcode: "#postcode",
    },
  });
</script>
<input type="hidden" name="haddr1" id="haddr1">
<input type="hidden" name="haddr2" id="haddr2">
<input type="hidden" name="haddr3" id="haddr3">
<input type="hidden" name="htown" id="htown">
<?php wp_footer(); ?>
</body>
</html>