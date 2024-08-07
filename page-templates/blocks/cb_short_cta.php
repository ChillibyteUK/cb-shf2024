<?php
$invert = isset(get_field('invert')[0]) && get_field('invert')[0] == 'Yes' ? 'short_cta--invert' : null;
?>
<section class="short_cta <?=$invert?>  py-5">
    <div class="container-xl short_cta__inner p-5">
        <div class="short_cta__title">Get your FREE CASH OFFER <span>- Fast!</span></div>
        <div>
            <input type="text" name="postcode" id="" placeholder="Enter your postcode"><button>Get Free Cash Offer</button>
        </div>
    </div>
</section>