<?php
$class = $block['className'] ?? 'py-5';
$invert = isset(get_field('invert')[0]) && get_field('invert')[0] == 'Yes' ? 'short_cta--invert' : null;

$id = random_str(4);
?>
<section class="short_cta <?=$invert?> <?=$class?>">
    <div class="container-xl short_cta__inner p-5">
        <div class="short_cta__title text-center text-md-start">Get your FREE CASH OFFER <span>- Fast!</span></div>
        <div class="text-center text-md-start">
            <input type="text" name="postcode" id="postcode_<?=$id?>" placeholder="Enter your postcode"><button class="button button-sm" onclick="redirectToForm('postcode_<?=$id?>')">Get Free Cash Offer</button>
        </div>
    </div>
</section>
