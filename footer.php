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
                <div class="pt-4">
                  <!-- TrustBox script -->
                  <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
                  <!-- End TrustBox script -->
                  <!-- TrustBox widget - Micro Star -->
                  <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b732fbfb950b10de65e5" data-businessunit-id="5458ad5900006400057b543a" data-style-height="25px" data-style-width="100%" data-theme="dark">
                      <a href="https://uk.trustpilot.com/review/sellhousefast.co.uk" target="_blank" rel="noopener">Trustpilot</a>
                  </div>
                </div>
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
  document.addEventListener("DOMContentLoaded", function () {
    // Select all postcode fields
    var postcodeFields = document.querySelectorAll('input[type="text"][id^="postcode_"]'); 

    // console.log("Found postcode fields:", postcodeFields);

    // Initialize Address Finder for each postcode field
    postcodeFields.forEach(function (field) {
    //   console.log("Setting up Address Finder for field:", field.id);

      // Initialize Address Finder for each postcode field
      IdealPostcodes.AddressFinder.setup({
        apiKey: "ak_m0nmyml1DLCjYH79nA9dbcf4cRs5v",  // Use your own API key
        inputField: field,  // Bind to the specific postcode field
        outputFields: {
          line_1: "#addr1",
          line_2: "#addr2",
          line_3: "#addr3",
          post_town: "#town",
          postcode: "#" + field.id
        },

        // Log when address is retrieved (for debugging)
        onAddressRetrieved: function (address) {
          console.log("Address Retrieved for:", field.id, address);
        },

        // Log any errors during search (for debugging)
        onSearchError: function (error) {
          console.error("Search Error for:", field.id, error);
        }
      });
    });

    // Handle button click to redirect to the form page
    var buttons = document.querySelectorAll('.formbutton');  // Assume the button has class 'button-sm'
    
    buttons.forEach(function (button) {
      button.addEventListener('click', function (e) {
        e.preventDefault();

        var postcodeField = document.querySelector('input[type="text"][id^="postcode_"]');
        var line1 = document.getElementById('addr1').value;
        var line2 = document.getElementById('addr2').value;
        var line3 = document.getElementById('addr3').value;
        var postTown = document.getElementById('town').value;
        var postcodeOutput = postcodeField ? postcodeField.value : '';

        // Build the URL with query parameters to pass the address data
        var formPageUrl = "/free-cash-offer/?" + new URLSearchParams({
          addr1: line1,
          addr2: line2,
          addr3: line3,
          town: postTown,
          postcode: postcodeOutput
        }).toString();

        // Redirect to the form page
        window.location.href = formPageUrl;
      });
    });

  });
</script>

<!-- Add Hidden Fields -->
<input type="hidden" id="addr1" name="addr1">
<input type="hidden" id="addr2" name="addr2">
<input type="hidden" id="addr3" name="addr3">
<input type="hidden" id="town" name="town">
<input type="hidden" id="postcode_output" name="postcode_output">

<?php
/*
if (is_page('free-cash-offer')) {
    ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Function to get the URL parameters
    function getParameterByName(name) {
        const url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        const regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    // Get the 'addr1' parameter from the URL
    var addr1Value = getParameterByName('addr1');

    // Check if 'addr1' parameter exists and if we are on the first step
    if (addr1Value) {
        // Use sessionStorage to ensure we only advance once
        if (!sessionStorage.getItem('addr1_advanced')) {
            setTimeout(function() {
                // Simulate a click on the "Next" button to move to the next step
                var nextButton = document.querySelector(".gform_next_button");
                if (nextButton) {
                    nextButton.click();
                    // Set a flag in sessionStorage to prevent repeated advancement
                    sessionStorage.setItem('addr1_advanced', 'true');
                }
            }, 250);  // Delay to ensure the form is ready
        }
    }
});
</script>
    <?php
}
    */
?>
<?php wp_footer(); ?>
</body>
</html>