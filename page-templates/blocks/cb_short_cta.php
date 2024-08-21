<?php
$invert = isset(get_field('invert')[0]) && get_field('invert')[0] == 'Yes' ? 'short_cta--invert' : null;
?>
<section class="short_cta <?=$invert?>  py-5">
    <div class="container-xl short_cta__inner p-5">
        <div class="short_cta__title text-center text-md-start">Get your FREE CASH OFFER <span>- Fast!</span></div>
        <div class="text-center text-md-start">
            <input type="text" name="postcode" id="postcode" autocomplete="off" placeholder="Enter your postcode"><button class="button button-sm" onclick="redirectToForm()">Get Free Cash Offer</button>
        </div>
    </div>
</section>